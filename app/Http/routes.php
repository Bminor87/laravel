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

Route::get('/', 'HomeController@index');
Route::get('play', 'PlayController@index');

Route::get('home', 'HomeController@index');
Route::get('home/add', 'HomeController@add');
Route::get('home/reset', 'HomeController@reset');

Route::get('recipes', 'RecipesController@index');
Route::get('recipes/{id}', 'RecipesController@show');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
