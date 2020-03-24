@extends('layouts.admin')

@section('content')

<h1>Edit Users</h1>

@include('includes.form_errors')	

<div class="col-sm-3">
	<img src="{{$user->photo ? $user->photo->file : 'http:://placehold.it/400x400'}}" class="img-responsive img-rounded">
</div>
<div class="col-sm-9">
{!! Form::model($user,['method'=>'PATCH','action'=>['AdminUserController@update',$user->id],'files'=>true]) !!}
	
	<div class="form-group">
		{!! Form::label('name','Name:') !!}
		{!! Form::text('name',null,['class'=>'form-control']) !!}
	</div>

	<div class="form-group">
		{!! Form::label('email','Email:') !!}
		{!! Form::text('email',null,['class'=>'form-control']) !!}
	</div>

	<div class="form-group">
		{!! Form::label('role_id','Role:') !!}
		{!! Form::select('role_id',[''=>'Choose Options']+$roles,null,['class'=>'form-control']) !!}
	</div>

	<div class="form-group">
		{!! Form::label('is_active','Status:') !!}
		{!! Form::select('is_active',array(1=>'Active',0=>'Not Active'),null,['class'=>'form-control']) !!}
	</div>


    <div class="form-group">
        {!! Form::label('photo_id','Photo:') !!}
        {!! Form::file('photo_id',null,['class'=>'form-control']) !!}
     </div>

	<div class="form-group">
		{!! Form::label('password','Password:') !!}
		{!! Form::password('password',['class'=>'form-control']) !!}
	</div>

	<div class="form-group">
		{!! Form::submit('Update',['class'=>'btn btn-info']) !!}
	</div>

{!! Form::close() !!}
</div>

@endsection