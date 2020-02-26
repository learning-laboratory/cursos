@extends('layouts.app')

<h2>Edit Post</h2>

@section('content')
	<form method="post" action="/posts/{{$post->id}}">
		
		<input type="hidden" name="_method" value="PUT">
		<input type="text" name="title" placeholder="Enter title" value="{{$post->title}}">
		{{ csrf_field() }} 
		<button type="submit" name="submit">Update</button>
	</form>
	<form method="post" action="/posts/{{$post->id}}">
		<input type="hidden" name="_method" value="DELETE">
		{{ csrf_field() }} 
		<button type="submit">Delete</button>
	</form>
@yield('footer')