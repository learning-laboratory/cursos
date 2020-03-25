@extends('layouts.admin')

@section('content')

	<h1>Categories</h1>

	@include('includes.form_errors')
	{!! Form::model($category,['method'=>'PATCH','action'=>['AdminCategoriesController@update',$category->id]]) !!}
	
		<div class="form-group">
			{!! Form::label('name','Name:') !!}
			{!! Form::text('name',null,['class'=>'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::submit('Update',['class'=>'btn btn-info']) !!}
		</div>

	{!! Form::close() !!}

	{!! Form::open(['method'=>'DELETE','action'=>['AdminCategoriesController@destroy',$category->id]]) !!}
		<div class="form-group">
			{!! Form::submit('Delete',['class'=>'btn btn-danger']) !!}
		</div>
	{!! Form::close() !!}

@endsection