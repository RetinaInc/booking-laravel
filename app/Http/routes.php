<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('property/location', 'PropertyController@location');
Route::post('property/location', 'PropertyController@location');

Route::resource('property', 'PropertyController');

Route::get('property/facilities/{property_id}', 'PropertyFacilityController@create');
Route::post('property/facilities/{property_id}', 'PropertyFacilityController@store');

Route::get('property/room/type/{property_id}', 'RoomTypeController@create');
Route::post('property/room/type/{property_id}', 'RoomTypeController@store');

Route::get('property/room/{property_id}', 'RoomController@create');
Route::post('property/room/{property_id}', 'RoomController@store');


