@extends('layouts.admin')

@section('content')

@section('header_section')
  <div class="col-sm-6">
    <h1 class="m-0 text-dark">Actualizar tags</h1>
  </div><!-- /.col -->
  <div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
      <li class="breadcrumb-item"><a href="/admin">Página inícial</a></li>
      <li class="breadcrumb-item active">Tags</li>
    </ol>
  </div><!-- /.col -->
@endsection

@include('includes.form_errors')
<div class="card card-secondary" style="width: 100%;">
    <div class="card-header">
    </div>
    <div class="container" style="padding: 20px;">
	    <div class="row">
			<div class="col-sm-12">
				{!! Form::model($tag,['method'=>'PATCH','action'=>['AdminTagsController@update',$tag->id]]) !!}
					<div class="form-group">
						{!! Form::label('name','Name:') !!}
						{!! Form::text('name',null,['class'=>'form-control']) !!}
					</div>
					<div class="form-group">
						{!! Form::label('description','Descrição') !!}
						{!! Form::textarea('description',null,['class'=>'form-control','rows'=>5]) !!}
					</div>
					<div class="form-group">
						{!! Form::submit('Update',['class'=>'btn btn-primary']) !!}
					</div>

				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>
@endsection