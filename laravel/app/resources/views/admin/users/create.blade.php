@extends('layouts.admin')

@section('content')

@section('header_section')
  <div class="col-sm-6">
    <h1 class="m-0 text-dark">Adicionar usuário</h1>
  </div><!-- /.col -->
  <div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
      <li class="breadcrumb-item"><a href="/admin">Página inícial</a></li>
      <li class="breadcrumb-item active">Usuários</li>
    </ol>
  </div><!-- /.col -->
@endsection

@include('includes.form_errors')

<div class="card card-secondary" style="width: 100%;">
    <div class="card-header">
    </div>
    <div class="container" style="padding: 20px;">
    	{!! Form::open(['method'=>'POST','action'=>'AdminUserController@store','files'=>true]) !!}
			<div class="form-group">
				{!! Form::label('name','Nome:') !!}
				{!! Form::text('name',null,['class'=>'form-control']) !!}
			</div>

			<div class="form-group">
				{!! Form::label('email','E-mail:') !!}
				{!! Form::text('email',null,['class'=>'form-control']) !!}
			</div>

			<div class="form-group">
				{!! Form::label('role_id','Função:') !!}
				{!! Form::select('role_id',[''=>'Selecionar']+$roles,null,['class'=>'form-control custom-select']) !!}
			</div>

			<div class="form-group">
				{!! Form::label('is_active','Estado:') !!}
				{!! Form::select('is_active',array(1=>'Activo',0=>'Inactivo'),0,['class'=>'form-control custom-select']) !!}
			</div>

	        <div class="form-group">
	           <div class="custom-file">
	            	{!! Form::label('photo_id','Foto:',['class'=>'custom-file-label']) !!}
			        {!! Form::file('photo_id',null,['class'=>'form-control custom-file-input']) !!}       
	            </div>
	        </div>

			<div class="form-group">
				{!! Form::label('password','Palavra-passe:') !!}
				{!! Form::password('password',['class'=>'form-control']) !!}
			</div>
				
			<div class="form-group">
				{!! Form::submit('Adicionar',['class'=>'btn btn-primary']) !!}
			</div>

		{!! Form::close() !!}
    </div>
</div>



@endsection