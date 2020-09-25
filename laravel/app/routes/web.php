<?php

use Illuminate\Support\Facades\Route;

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
Auth::routes();
Route::get('logout','Auth\LoginController@logout');
Route::get('/confirm',function(){
	return view('auth.passwords.confirm');
});
Route::get('/email',function(){
	return view('auth.passwords.email');
});
Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/team', 'HomeController@team')->name('team');
Route::get('/services', 'HomeController@services')->name('services');
Route::get('/blog', 'HomeController@blog')->name('blog');
Route::get('/contact', 'HomeController@contact')->name('contact');

Route::group(['middleware'=>['admin']], function(){
	
	Route::get('/admin','AdminController@index');
	Route::resource('admin/users','AdminUserController');
	Route::resource('admin/posts','AdminPostsController');
	Route::resource('admin/categories','AdminCategoriesController');
	Route::resource('admin/tags','AdminTagsController');
	Route::resource('admin/media','AdminMediaController');
	Route::resource('admin/comments','PostCommentController');
	Route::resource('admin/comments/replies','CommentRepliesController');
	
});

Route::group(['middleware'=>'auth'],function(){
	Route::post('comment/reply','CommentRepliesController@createReply');
});

Route::get('/post/{id}',['as'=>'home.post','uses'=>'AdminPostsController@post']);

