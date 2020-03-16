<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
//preko ovoga ce Vue komunicirati sa Laravel. Middleware je sloj koji se nalazi izmedju Vue i Laravel, i proverava odradjene stvari. Npr. da li je korisnik ulogovan.

//Route::post('/login', 'Auth\LoginController@authenticate');

Route::middleware('api')->get('/contacts','ContactController@index');
Route::middleware('api')->post('/contacts','ContactController@store');
Route::middleware('api')->get('/contacts/{id}','ContactController@show');
Route::middleware('api')->put('/contacts/{id}','ContactController@update');
Route::middleware('api')->delete('/contacts/{id}','ContactController@destroy');


/*
Route::middleware('jwt')->get('/contacts', 'ContactController@index');

Route::middleware('jwt')->post('/contacts', 'ContactController@store');

Route::middleware('jwt')->get('/contacts/{id}', 'ContactController@show');

Route::middleware('jwt')->put('/contacts/{id}', 'ContactController@update');

Route::middleware('jwt')->delete('/contacts/{id}', 'ContactController@destroy');
*/