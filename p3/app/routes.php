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
	return View::make('index');
});

Route::get('/lorem', 'LoremController@showLorem');

Route::post('/lorem','LoremController@generateLorem');


Route::get('/randomuser','RandomUserController@showRandomUser');
Route::post('/randomuser','RandomUserController@generateRandomUser');

Route::get('/trigger_error',function(){
	$foo = new Foobar;
});

Route::get('/get-environment',function(){
	echo "Environment: ".App::environment();
});