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
Route::get('/sync',function(){
	
	$user = User::findOrFail(5);
	$user->roles()->detach([1,2]);

});


Route::get('/create',function(){
	$user = new User();

	$user1 = $user->create(['name'=>'MANUEL','email'=>'MAMA@gmail.com','password'=>'1234']);
	$roles = Role::all();
	//foreach ($roles as $role) {
		//echo $roles[1]->name;
	//	$user1->roles()->save(1);
		$user1->roles()->attach([1,2]);
	//}
	//$user = User::find(4);
	//$user1->roles()->save([$role]);
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
	$user->roles()->attach(6);

});

Route::get('/detach',function(){
	
	$user = User::findOrFail(1);
//	$user->roles()->attach(6);
	$user->roles()->detach(6);

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