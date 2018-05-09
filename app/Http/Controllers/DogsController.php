<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;
use App\Race;
use App\Dog;
use Illuminate\Support\Facades\DB;
use Validator;
use Flash;

class DogsController extends Controller
{
    public function Inicio()
    {
        $dogs = Dog::inRandomOrder()->get();

        return view('index', compact('id', 'dogs'));
    }

    public function search(Request $request)
    {
      $input = $request->all();

      if(isset($input['search'])){
        $dogs = Dog::where('name', 'ILIKE', '%'.$input['search'].'%')->get();

        return view('search', compact('id', 'dogs'));
      }

      Flash::error('No existe ninguna coincidencia.');

      return redirect(route('inicio'));
    }

    public function paises()
    {
      $countries = Country::all();

      return view('countries', compact('id', 'countries'));
    }

    public function pais($id)
    {
      $country = Country::findOrFail($id);
      $dogs = Country::findOrFail($id)->dogs;

      return view('country', compact('dogs', 'country'));
    }

    public function razas()
    {
      $races = Race::all();

      return view('races', compact('id', 'races'));
    }

    public function raza($id)
    {
      $race = Race::findOrFail($id);
      $dogs = Race::findOrFail($id)->dogs;

      return view('race', compact('dogs', 'race'));
    }

    public function instruction()
    {

      return view('instruction');
    }

    public function Register()
    {
        $races = Race::pluck('name', 'id');
        $countries = Country::pluck('name', 'id');

        return view('dogs.register', compact('id', 'countries'), compact('id', 'races'));
    }

    public function Registerhidden()
    {
        $races = Race::pluck('name', 'id');
        $countries = Country::pluck('name', 'id');

        return view('admin.register', compact('id', 'countries'), compact('id', 'races'));
    }

    public function Store(Request $request)
    {
        $validated = Validator::make($request->all(), [
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

        $imageName = time().'.'.$request->file('image')->getClientOriginalExtension();
        $request->file('image')->move(base_path().'/public/assets/perros/', $imageName);

        $dog = new Dog;
        $dog->name = $request->name;
        $dog->image = $imageName;
        $dog->race_id = $request->race_id;
        $dog->bio = $request->bio;
        if ($request->gender==1){
          $dog->gender = 'Female';
        }
        else{
          $dog->gender = 'Male';
        }
        $dog->age = $request->age;
        $dog->dead = $request->dead;
        $dog->country_id = $request->country_id;
        $dog->owner_name = $request->owner_name;
        $dog->owner_email = $request->owner_email;
        $dog->save();

        Flash::success('Felicitaciones tu mascota a sido registrada con exito.');
        return redirect(route('inicio'));
    }

    public function Deletedhidden($id)
    {
        $dog = Dog::findOrFail($id)->delete();;

        Flash::success('Ha sido eliminado con exito.');
        return redirect(route('inicio'));
    }

    public function show($id)
    {
        $dog = Dog::findOrFail($id);

        return view('dogs.show', compact('dog'));
    }

    public function getimage($image)
    {
        $Path = base_path().'/public/assets/perros/'.$image;

        return response()->file($Path);
    }

    public function about()
    {

        return view('about');
    }

    public function contact()
    {

        return view('contact');
    }
}
