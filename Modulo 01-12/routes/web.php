<?php
use App\Country;
use App\Post;
use App\User;
use App\Role;
use App\Photo;
use App\Tag;
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
/*
Route::get('/about',function(){
	return "Hi about ppage";
});

Route::get('/contact',function(){
	return "contact";
});

Route::get('admin/posts/example',array('as'=>'admin.home',function(){
	$url = route('admin.home');
	return "url ".$url;
}));


//Route::get('/post/{id}','PostController@index');

//Route::resource('posts','PostController');
//Route::get('/contact','PostController@contact');
//Route::get('post/{id}','PostController@show_post');
*/
/*
|--------------------------------------------------------------------------
| DATABASE Raw SQL Queries
|--------------------------------------------------------------------------
*/
/*
Route::get('/insert',function(){
	DB::insert('insert into posts(title,content) values(?,?)', ['Javaa with Hibernate','Hibernate is the best framework of java']);
});
*/
/*
Route::get('/read',function(){
	$results = DB::select('select * from posts where id = ?',[1]);
	return $results;
	foreach ($results as $result) {
		return $result->title;
	}
});
*//*
Route::get('/update', function(){
	$updated = DB::update('update posts set title = "Update title" where id = ?',[1]);
	return $updated;
});*/
/*
Route::get('/delete', function(){
	$deleted = DB::delete('delete from posts where id = ?',[1]);
	return $deleted;
});*/

/*
|--------------------------------------------------------------------------
| ELOQUENT
|--------------------------------------------------------------------------
*/
/*
Route::get('/read',function(){
	$posts = Post::all();
	foreach ($posts as $post) {
		return $post->title;
	}

});*//*
Route::get('/find',function(){
	$post = Post::find(1);
	return $post->title;
});*//*
Route::get('/findwhere',function(){
	$post = Post::where('id',1)->orderBy('id', 'desc')->take(1)->get();
	return $post;
});
*//*
Route::get('/findmore',function(){
	//$post = Post::findOrFail();
	//return $post;
	$posts = Post::where('users_count','<',50)->firstOrFail();

});*/
/*
Route::get('/basicinsert', function(){
	$post = new Post;
	$post->title = "SQL";
	$post->content = "SQL LARAVEL";
	$post->save();
});*/
/*
Route::get('/basicinsert', function(){
	$post =  Post::find(2);
	$post->title = "JAVA Hibernate";
	$post->content = "framework";
	$post->save();
});*/
/*
Route::get('/create',function(){
	Post::create(['title'=>'create method','content'=>'LARAVEL']);
});
*//*
Route::get('/update',function(){
	Post::where('id',3)->where('is_admin',1)->update(['title'=>'NEW title','content'=>'LEARNING']);
});
*/
/*Route::get('/delete',function(){
	$post = Post::find(2);
	$post->delete();
});
*//*
Route::get('/destroy',function(){
	Post::destroy([1,2]);
	Post::where('is_admin',0)->delete();
});*//*
Route::get('/softDeletes',function(){
	Post::find(1)->delete();
});*//*
Route::get('/readDeletes',function(){
	//$post = Post::find(1);
	//$post = Post::withTrashed()->where('id',1)->get();
	$post = Post::onlyTrashed()->where('is_admin',0)->get();
	
	return $post;
});
*/
/*
Route::get('/restore',function(){
	Post::withTrashed()->where('is_admin',0)->restore();

});*//*
Route::get('/forcedelete', function(){
	 Post::onlyTrashed()->where('is_admin',0)->forceDelete();
});*/
/*
|--------------------------------------------------------------------------
| ELOQUENT Relationship
|--------------------------------------------------------------------------
*//*
//One to One relationship
Route::get('/user/{id}/post',function($id){
 return	User::find($id)->post->title;
});

Route::get('/post/{id}/user',function($id){
	return  Post::find(1)->user->name;
	
});
*/
/*
//One to Many
Route::get('/posts',function(){
	$user = User::find(1);
	foreach ($user->posts as $post) {
		echo $post->title."<br>";
	}
});*//*
//Many to Many
Route::get('/roles',function(){
	$user = User::find(2);

	foreach ($user->roles as $role) {
		echo $role->name."<br>";
	}
});

*/
/*
//Acessing the intermediate table / pivot

Route::get('/user/pivot',function (){
	$user = User::find(1);
	foreach ($user->roles as $role) {
		echo $role->pivot->created_at;
	}
});

Route::get('/user/country',function(){
	$country = Country::find(3);
	foreach ($country->posts as $post) {
		return $post->title;
	}	
});

*/
//Polymorphic Relations
/*
Route::get('/user/photos',function(){
	$user = User::find(2);
foreach ($user->photos as $photo ) {
	echo $photo;
}
});

Route::get('/post/photos',function(){
	$post = Post::find(1);
foreach ($post->photos as $photo ) {
	echo $photo;
}
});*/
/*
Route::get('/photo/{id}/post',function($id){
	
	$photo = Photo::findOrFail($id);
	return  $photo;

});
*/
//Polymorphic Many to Many
/*
Route::get('/post/tag',function (){
	$post = Post::find(2);

	foreach ($post->tags as $tag) {
		echo $tag->name."<br>";
	}
});
*//*
Route::get('/tag/post', function(){
	$tag = Tag::find(1);
	foreach ($tag->posts as $post) {
		echo $post->title."<br>";	
	}
});*/
/*
|--------------------------------------------------------------------------
| CRUD Aplication
|----------- ---------------------------------------------------------------
*/

Route::group(['middleware'=>'web'],function(){
	
	Route::resource('/posts','PostController');
	
	Route::get('/dates',function(){
		$date = new DateTime();
		echo $date->format('d-m-Y');
		echo "<br>";
		echo Carbon\Carbon::now()->diffForHumans();
		echo Carbon\Carbon::now()->subMonths();
		echo Carbon\Carbon::now()->yesterday();
	});

	Route::get('/getname',function(){
		$user = User::find(1);
		echo $user->getNameAttribute($user->name);
	});

	Route::get('/setname',function(){
		$user = User::find(1);
		$user->name = 'Jonh Trigger';
		$user->save();
	});

});

 