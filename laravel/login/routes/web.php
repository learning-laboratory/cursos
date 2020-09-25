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

Route::get('/', function () {
	if (Auth::check()) {
		return "The user is logged in";
	}else{
   return view('welcome');
		
	}
});

Route::auth();

Route::get('/home', 'HomeController@index')->name('home');
