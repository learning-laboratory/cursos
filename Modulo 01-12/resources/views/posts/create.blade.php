@extends('layouts.app')

@section('content')
	<h1>Create Post</h1>
	<!--<form method="post" action="/posts">-->
	{!! Form::Open(['method'=>'POST','action'=>'PostController@store']) !!}
		
		<div class="form-group">
			{!! Form::label('title','Title:') !!}
			{!! Form::text('title',null,['class'=>'form-control']) !!}
		</div>
		{!! Form::submit('save',['class'=>'btn btn-danger']) !!}

	{!! Form::close() !!}

	@if(count($errors) > 0)
		<div class="alert alert-danger">
			<ul>
				@foreach($errors->all() as $error)
				<li>{{$error}}</li>
				@endforeach
			</ul>
		</div>
	@endif
@endsection
@yield('footer')