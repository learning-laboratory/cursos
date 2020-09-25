<?php
use App\User;
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
    return view('welcome');
});

Route::get('/create',function(){
	
	$user = User::findOrFail(1);

	return $user->posts()->save(new App\Post(['title'=>'Open space','body'=>'lorem lorem ipsum ispum']));

});

Route::get('/read',function(){
	$user = User::findOrFail(1);
	//return $user->posts;
	foreach ($user->posts as $post) {
		echo  $post->title."<br>";
	}
});

Route::get('/update',function(){
	$user = User::findOrFail(2);
	$user->posts()->whereId(6)->update(['title'=>'Lorem','body'=>'Lorem']);
});

Route::get('/delete',function(){
	$user = User::findOrFail(2);
	$user->posts()->whereId(2)->delete();
});