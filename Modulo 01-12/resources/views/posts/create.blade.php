@extends('layouts.app')

@section('content')
	<form method="post" action="/posts">
		<input type="text" name="title" placeholder="Enter title">
		{{ csrf_field() }}
		<button type="submit" name="submit">Send</button>
	</form>
@yield('footer')