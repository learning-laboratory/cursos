@extends('layouts.admin')

@section('content')

@section('header_section')
  <div class="col-sm-6">
    <h1 class="m-0 text-dark">Tags</h1>
  </div><!-- /.col -->
  <div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
      <li class="breadcrumb-item"><a href="/admin">Página inícial</a></li>
      <li class="breadcrumb-item active">Tags</li>
    </ol>
  </div><!-- /.col -->
@endsection

@if(Session::has('deleted_tag') or Session::has('created_tag') or Session::has('updated_tag') )
	<div class="container">
		<div class="row">
			<div class="col-sm-12 p-4">
				<div class="alert alert-success">
					@php
						if(session('created_tag') != null)
							echo session('created_tag'); 
						else if(session('deleted_tag') != null)
							echo session('deleted_tag');
						else if(session('updated_tag') != null)
							echo session('updated_tag');
					@endphp
				</div>
			</div>			
		</div>
	</div>
@endif

<div class="card card-secondary" style="width: 100%;">
    <div class="card-header">
    </div>
    <div class="container" style="padding: 20px;">
    <div class="row">
		<div class="col-sm-5">

			{!! Form::open(['method'=>'POST','action'=>'AdminTagsController@store']) !!}	
				<div class="form-group">
					{!! Form::label('name','Nome:') !!}
					{!! Form::text('name',null,['class'=>'form-control']) !!}
				</div>

				<div class="form-group">
					{!! Form::label('description','Descrição') !!}
					{!! Form::textarea('description',null,['class'=>'form-control','rows'=>5]) !!}
				</div>

				<div class="form-group">
					{!! Form::submit('Adicionar',['class'=>'btn btn-primary']) !!}
				</div>
			{!! Form::close() !!}

		</div>
		<div class="col-sm-7">
		<div class="card">
            <div class="card-header">
                <h3 class="card-title"></h3>
			<div class="card-tools">
				{{$tags->links()}} </div>
        	</div>
            <div class="card-body p-0">
			<table class="table table-striped">
				<thead>
					<tr>
						<th>Nome</th>
						<th>Descrição</th>
						<th style="width: 90px;">Ações</th>
					</tr>
				</thead>
				<tbody>
					@if($tags)
						@foreach($tags as $tag)
							<tr>
								<td>{{$tag->name}}</td>
								<td>{{$tag->description}}</td>
								<td style="width: 90px;">
									{!! Form::open(['method'=>'DELETE','action'=>['AdminTagsController@destroy',$tag->id]]) !!}
										<a href="{{route('tags.edit',$tag->id)}}" class="text-dark"><i class="fa fa-edit update"></i></a>
										<button type="submit" style="border: none;">
											<i class="fa fa-trash destroy"></i>
										</button>
									{!! Form::close() !!}
								</td>
							</tr>
						@endforeach
					@endif
				</tbody>
		   </table>
		</div>
		</div>
	</div>

</div>
@endsection
@section('scripts')
	<script type="text/javascript">
	(function($) {

	 var pagination =  $('.card-tools .pagination');
	 pagination.addClass('pagination-sm');

	 
	})(jQuery);
	</script>
@endsection