<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesCommands;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Input;
use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\ExecutePayment;
use PayPal\Api\PaymentExecution;
use PayPal\Api\Transaction;
use Flash;
use App\Dog;
use Validator;

class PaypalController extends Controller
{
    private $apiContext;

    public function __construct()
    {
      // setup PayPal api context
      $paypal_conf = \Config::get('paypal');
      $this->apiContext = new ApiContext(new OAuthTokenCredential($paypal_conf['client_id'], $paypal_conf['secret']));
      $this->apiContext->setConfig($paypal_conf['settings']);
    }

    public function postPayment(Request $data)
    {
        $validated = Validator::make($data->all(), [
            'name' => 'required',
            'image' => 'required|mimes:jpeg,png,jpg,gif,svg',
            'race_id' => 'required',
            'bio' => 'required',
            'gender' => 'required',
            'age' => 'required',
            'dead' => 'required',
            'country_id' => 'required',
            'owner_name' => 'required',
            'owner_email' => 'required'
        ]);

        if ($validated->fails()){
            Flash::error('Ha ocurrido un error, es posible que falte un dato.');

            return redirect(route('dog.register'));
        }

        $imageName = time().'.'.$data->file('image')->getClientOriginalExtension();
        $data->file('image')->move(base_path().'/public/assets/perros/', $imageName);

        \Session::put('name', $data->name);
        \Session::put('image', $imageName);
        \Session::put('race_id', $data->race_id);
        \Session::put('bio', $data->bio);
        \Session::put('gender', $data->gender);
        \Session::put('age', $data->age);
        \Session::put('dead', $data->dead);
        \Session::put('country_id', $data->country_id);
        \Session::put('owner_name', $data->owner_name);
        \Session::put('owner_email', $data->owner_email);

        $payer = new Payer();
        $payer->setPaymentMethod('paypal');

        $items = array();
        $subtotal = 0;
        $shipping = 0.1;
        //$cart = \Session::get('cart');
        $currency = 'USD';

        //foreach($cart as $producto){
          $item = new Item();
          $item->setName('Inscripcion doggymillon')
          ->setCurrency($currency)
          ->setDescription('Compra de un espacio para la pagina de doggymillon.')
          //->setQuantity($producto->quantity)
          ->setQuantity("1")
          ->setPrice("1");

          $items[] = $item;
          $subtotal = "1";
        //}

        $item_list = new ItemList();
        $item_list->setItems($items);

        $details = new Details();
        $details->setSubtotal($subtotal)
        ->setShipping($shipping);

        $total = $subtotal + $shipping;

        $amount = new Amount();
        $amount->setCurrency($currency)
          ->setTotal($total)
          ->setDetails($details);

        $transaction = new Transaction();
        $transaction->setAmount($amount)
          ->setItemList($item_list)
          ->setDescription('Pedido de espacio');

        $redirect_urls = new RedirectUrls();
        $redirect_urls->setReturnUrl(\URL::route('payment.status'))
          ->setCancelUrl(\URL::route('payment.status'));
        //$redirect_urls->setReturnUrl("$baseUrl/ExecutePayment.php?success=true")
        //  ->setCancelUrl("$baseUrl/ExecutePayment.php?success=false");

        $payment = new Payment();
        $payment->setIntent('Sale')
          ->setPayer($payer)
          ->setRedirectUrls($redirect_urls)
          ->setTransactions(array($transaction));
        //echo dd($payment);

        $request = clone $payment;
        try {
          $payment->create($this->apiContext);
        } catch (\PayPal\Exception\PPConnectionException $ex) {
          if (\Config::get('app.debug')) {
            echo "Exception: " . $ex->getMessage() . PHP_EOL;
            $err_data = json_decode($ex->getData(), true);
            exit;
          } else {
            die('Ups! Algo salió mal');
          }
        }

        foreach($payment->getLinks() as $link) {
          if($link->getRel() == 'approval_url') {
            $redirect_url = $link->getHref();
            break;
          }
        }

        // add payment ID to session
        \Session::put('paypal_payment_id', $payment->getId());

        if(isset($redirect_url)) {
          // redirect to paypal
          return \Redirect::away($redirect_url);
        }
    }

    public function getPaymentStatus()
    {
      // Get the payment ID before session clear
      $payment_id = \Session::get('paypal_payment_id');

      // clear the session payment ID
      \Session::forget('paypal_payment_id');

      $payerId = \Input::get('PayerID');
      $token = \Input::get('token');

      $name = \Session::get('name');
      $image = \Session::get('image');
      $race_id = \Session::get('race_id');
      $bio = \Session::get('bio');
      $gender = \Session::get('gender');
      $age = \Session::get('age');
      $dead = \Session::get('dead');
      $country_id = \Session::get('country_id');
      $owner_name = \Session::get('owner_name');
      $owner_email = \Session::get('owner_email');

      if (empty($payerId) || empty($token)) {
        Flash::error('Hubo un problema al intentar pagar con Paypal');

        return \Redirect::route('inicio');
      }

      $payment = Payment::get($payment_id, $this->apiContext);

      $execution = new PaymentExecution();
      $execution->setPayerId(\Input::get('PayerID'));

      $result = $payment->execute($execution, $this->apiContext);


      if ($result->getState() == 'approved') {
        //\Session::forget('cart');

        $dog = new Dog;
        $dog->name = $name;
        $dog->image = $image;
        $dog->race_id = $race_id;
        $dog->bio = $bio;
        if ($gender==1){
          $dog->gender = 'Female';
        }
        else{
          $dog->gender = 'Male';
        }
        $dog->age = $age;
        $dog->dead = $dead;
        $dog->country_id = $country_id;
        $dog->owner_name = $owner_name;
        $dog->owner_email = $owner_email;
        $dog->save();

        Flash::success('Purchase made correctly and your dog registered successfully.');
        return redirect(route('inicio'));
      }
      Flash::error('The purchase was canceled.');
      return \Redirect::route('inicio');
    }
}
