<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', ['as'=> 'inicio', 'uses' => 'DogsController@Inicio']);
Route::get('register', ['as'=> 'dog.register', 'uses' => 'DogsController@Register']);
Route::get('123RR%(D@gg&M177@n)%RR456register', ['as'=> '123RR%(D@gg&M177@n)%RR456register', 'uses' => 'DogsController@Registerhidden']);
Route::post('123RR%(D@gg&M177@n)%RR456register', ['as'=> '123RR%(D@gg&M177@n)%RR456register', 'uses' => 'DogsController@Store']);
Route::get('123RR%(D@gg&M177@n)%RR456deleted/{id}', ['as'=> '123RR%(D@gg&M177@n)%RR456deleted', 'uses' => 'DogsController@Deletedhidden']);
Route::get('dogimage/{image}', 'DogsController@getimage')->name('dogimage');
Route::get('show/{id}', 'DogsController@show')->name('show');
Route::get('search', 'DogsController@search')->name('search');
Route::get('paises', 'DogsController@paises')->name('paises');
Route::get('pais/{id}', 'DogsController@pais')->name('pais');
Route::get('razas', 'DogsController@razas')->name('razas');
Route::get('raza/{id}', 'DogsController@raza')->name('raza');
Route::post('payment', array(
	'as' => 'payment',
	'uses' => 'PaypalController@postPayment',
));
Route::get('payment/status', array(
	'as' => 'payment.status',
	'uses' => 'PaypalController@getPaymentStatus',
));
Route::get('about', 'DogsController@about')->name('about');
Route::get('contact', 'DogsController@contact')->name('contact');
Route::get('instruction', 'DogsController@instruction')->name('instruction');
