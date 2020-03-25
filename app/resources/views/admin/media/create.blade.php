@extends('layouts.admin')

@section('styles')
	<link rel="stylesheet" type="text/css" href="/css/dropzone.min.css">
	<link rel="stylesheet" type="text/css" href="/css/basic.min.css">
@endsection

@section('content')
	<h1>Upload Media</h1>

	{!! Form::open(['method'=>'POST','action'=>'AdminMediaController@store','class'=>'dropzone']) !!}

	{!! Form::close() !!}
	
@endsection
   
@section('scripts')
	<script type="text/javascript" src="/js/dropzone-amd-module.min.js"></script>
	<script type="text/javascript" src="/js/dropzone.min.js"></script>
@endsection