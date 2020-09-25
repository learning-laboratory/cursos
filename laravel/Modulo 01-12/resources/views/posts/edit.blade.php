@extends('layouts.app')

<h2>Edit Post</h2>

@section('content')
	{!! Form::model($post,['method'=>'PATCH','action'=>['PostController@update',$post->id] ]) !!}
		<div class="form-group">
			{{ csrf_field() }} 
			{!! Form::label('title','Title:') !!}
			{!! Form::text('title',null,['class'=>'form-control']) !!}
		</div>
		{!! Form::submit('update',['class'=>'btn btn-danger']) !!}
	{!! Form::close() !!}
	
	{!! Form::open(['method'=>'DELETE','action'=>['PostController@destroy',$post->id]]) !!}
		{{ csrf_field() }} 	
		{!! Form::submit('delete',['class'=>'btn btn-danger']) !!}
	{!! Form::close() !!}
@yield('footer')