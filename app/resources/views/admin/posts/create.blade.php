@extends('layouts.admin')

@section('content')

@section('header_section')
  <div class="col-sm-6">
    <h1 class="m-0 text-dark">Adicionar ártigo</h1>
  </div><!-- /.col -->
  <div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
      <li class="breadcrumb-item"><a href="/admin">Página inícial</a></li>
      <li class="breadcrumb-item active">Ártigos</li>
    </ol>
  </div><!-- /.col -->
@endsection

@include('includes.form_errors')

<div class="card card-secondary" style="width: 100%;">
    <div class="card-header">
    </div>
  	{!! Form::open(['method'=>'POST','action'=>'AdminPostsController@store','files'=>true]) !!}
	    <div class="container" style="padding: 20px;">
		    <div class="row">
				<div class="col-sm-8">			
					<div class="form-group">
						{!! Form::label('title','Título:') !!}
						{!! Form::text('title',null,['class'=>'form-control']) !!}
					</div>
					<div class="form-group editor">
						{!! Form::label('body','Conteúdo:') !!}
						{!! Form::textarea('body',null,['class'=>'form-control textarea']) !!}			
					</div>
				</div>
				<div class="col-sm-4">
					<div class="card">
			            <div class="card-header">
			                <h3 class="card-title">Documento</h3>
			        	</div>
			            <div class="card-body p-3">
			            	<div class="form-group">
								{!! Form::label('category_id','Categorias:') !!}
								{!! Form::select('category_id[]',$categories,1,['class'=>'form-control select2','multiple'=>'multiple']) !!}
							</div>

						
							<div class="form-group">
								{!! Form::label('tag_id','Tags:') !!}
								{!! Form::select('tag_id[]',$tags,null,['class'=>'form-control select2','multiple'=>'multiple']) !!}
							</div>

							<div class="form-group">
								<div class="custom-file">
					            	{!! Form::label('photo_id','Foto:',['class'=>'custom-file-label']) !!}
							       {!! Form::file('photo_id',null,['class'=>'form-control']) !!}     
							            
					            </div>
							</div>
							<div class="form-group">
								{!! Form::submit('Publicar',['class'=>'btn btn-primary']) !!}
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	{!! Form::close() !!}
</div>

@endsection