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

	Route::get('/', function(){
			return View::make('home');	
	});
	
	Route::post('/', function(){
			return View::make('home');	
	});
	
	Route::get('/lorem', 'loremController@getLorem');
	
	Route::post('/lorem', 'loremController@postLorem');
	
	Route::get('/user', 'userController@getUser');

	Route::post('/user', 'userController@postUser');
	
	Route::get('/password', 'PasswordController@getPassword');

	Route::post('/password', 'PasswordController@postPassword');


