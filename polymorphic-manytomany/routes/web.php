<?php
use App\Post;
use App\User;
use App\Video;
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

Route::get('/create',function(){
	$post = Post::create(['name'=>'Lorem Lorem']);
	$tag = Tag::find(2);
	$post->tags()->save($tag);
	$video = Video::create(['name'=>'video_01.mp4']);
	$tag2 = Tag::find(3);
	$video->tags()->save($tag2);
});

Route::get('/read',function(){
	$post = Post::findOrFail(1);
	foreach ($post->tags as $tag) {
		echo $tag;
	}
});

Route::get('/update',function(){
	$post = Post::findOrFail(1);
	foreach ($post->tags as $tag) 
		return $tag->whereId(2)->update(['name'=>'Perl']);
});

Route::get('/delete', function(){
	$post = Post::findOrFail(1);
	foreach ($post->tags as $tag) 
		return $tag->whereId(1)->delete();
});