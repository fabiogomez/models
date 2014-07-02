<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
	
});
Route::get('/test', function()
{
	$user = User::find(1);
	print_r($user->profile);
	
});

Route::get('users/list','UserController@getListUsers');
Route::controller('users','UserController');
Route::controller('profiles','ProfileController');
Route::get('login','AuthController@getLogin');
Route::post('login','AuthController@postLogin');

