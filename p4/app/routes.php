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
	return View::make('home');
});

//sign in routes
Route::get('/signin','UserController@getLogin');
Route::post('/signin','UserController@postLogin');

//sign up routes
Route::get('/signup','UserController@getSignup');
Route::post('/signup','UserController@postSignup');

//sign out route
Route::get('/signout','UserController@getLogout');

//share new item route
Route::get('/sharemytravel',function(){
	return View::make('additem');
});
Route::post('/sharemytravel','ItemController@postShareItem');

//item list
Route::get('/itemlist','ItemListController@getList');
Route::get('/itemlistupdate','ItemListController@getList');
//edit item 
Route::get('/item/edit/{id}','ItemListController@getItemEdit');
Route::post('/item/edit','ItemListController@postItemEdit');
//delete item
Route::post('/item/delete','ItemListController@postItemDelete');



#some debug information
Route::get('/debugEnvironment','DebugController@debugEnvironment');
Route::get('/debugDatabase','DebugController@debugDatabase');


#some test routes
Route::get('/testdb',function(){
	$username = 'ahla@umail.com';
	$users = DB::table('users')->where('email','=',$username)->get();
	$num = count($users);
	var_dump($num);
});


Route::get('/testadd',function(){
	return View::make('test');
});

Route::get('/ping',function(){
	Log::info('Pinged log file');
	return 'Pinged log file';
});