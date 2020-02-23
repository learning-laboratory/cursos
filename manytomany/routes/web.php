<?php
use App\Role;
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
	$user = User::find(4);
	$user->roles()->save(new Role(['name'=>'administrator']));
});

Route::get('/read',function(){
	$user = User::findOrFail(1);
	foreach ($user->roles as $role) {
		//dd($role);
		echo $role->name;
	}
});

Route::get('/attach',function(){
	
	$user = User::findOrFail(1);
	$user->roles()->detach(6);

});

Route::get('/detach',function(){
	
	$user = User::findOrFail(1);
//	$user->roles()->attach(6);
	$user->roles()->detach(6);

});

Route::get('/sync',function(){
	
	$user = User::findOrFail(1);
	$user->roles()->sync([1,2]);

});


Route::get('/update',function(){
	$user = User::findOrFail(1);
	if ($user->has('roles')) {
		foreach ($user->roles as $role) {
			if ($role->name == "administrator") {
				$role->name = "admin";
				$role->save();
			}
		}
	}
});

Route::get('/delete',function(){
	$user = User::findOrFail(1);
	$user->roles()->delete();
});