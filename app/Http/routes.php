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

Route::get('/', function () {
    return view('welcome');
});


//Route::get('actuator', 'ActuatorController@index');
//Route::resource('actuator', 'ActuatorController');
//Route::controllers(['act' => 'ActuatorController',]);

Route::auth();

Route::resource('users', 'Auth\AuthController', [
    'only' => ['index', 'edit', 'update', 'destroy']
]);

Route::get('/home', 'HomeController@index');

Route::resource('location', 'LocationController');

Route::get('location/image/{filename}', 'LocationController@getFoto');

Route::group(['prefix' => 'circuit'], function() {

    Route::resource('sensor', 'SensorController');

    Route::resource('actuatorluminosity', 'Circuit\ActuatorLuminosityController');

    Route::resource('programmed/event/luminosity', 'ProgrammedEventLuminosityController');
});
