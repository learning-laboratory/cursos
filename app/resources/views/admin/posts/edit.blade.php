@extends('layouts.admin')

@section('content')

	<h1>Edt Posts</h1>
    <div class="row">

        <div class="col-sm-3">

            <img src="{{$post->photo ? $post->photo->file : $post->photoPlaceholder()}}" alt="" class="img-responsive">
             
            </div>

        <div class="col-sm-9">

	@include('includes.form_errors')
	{!! Form::model($post,['method'=>'PATCH','action'=>['AdminPostsController@update',$post->id],'files'=>true]) !!}
		
		<div class="form-group">
			{!! Form::label('title','Title:') !!}
			{!! Form::text('title',null,['class'=>'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('category_id','Category:') !!}
			{!! Form::select('category_id',[''=>'Choose Options']+$categories,null,['class'=>'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('photo_id','Photo:') !!}
			{!! Form::file('photo_id',null,['class'=>'form-control']) !!}
		</div>


		<div class="form-group">
			{!! Form::label('body','Description:') !!}
			{!! Form::textarea('body',null,['class'=>'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::submit('Update',['class'=>'btn btn-info']) !!}
		</div>

	{!! Form::close() !!}

	{!! Form::open(['method'=>'DELETE','action'=>['AdminPostsController@destroy',$post->id]]) !!}
		<div class="form-group">
			{!! Form::submit('Delete',['class'=>'btn btn-danger']) !!}
		</div>
	{!! Form::close() !!}
</div>
</div>

@endsection