@extends('layouts.admin')

@section('content')

@section('header_section')
  <div class="col-sm-6">
    <h1 class="m-0 text-dark">Categórias</h1>
  </div><!-- /.col -->
  <div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
      <li class="breadcrumb-item"><a href="/admin">Página inícial</a></li>
      <li class="breadcrumb-item active">Categórias</li>
    </ol>
  </div><!-- /.col -->
@endsection

@if(Session::has('deleted_category') or Session::has('created_category') or Session::has('updated_category') )
	<div class="container">
		<div class="row">
			<div class="col-sm-12 p-4">
				<div class="alert alert-success">
					@php
						if(session('created_category') != null)
							echo session('created_category'); 
						else if(session('deleted_category') != null)
							echo session('deleted_category');
						else if(session('updated_category') != null)
							echo session('updated_category');
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

			{!! Form::open(['method'=>'POST','action'=>'AdminCategoriesController@store']) !!}	
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
				{{$categories->links()}} 
            </div>
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
					@if($categories)
						@foreach($categories as $category)
							<tr>
								<td>{{$category->name}}</td>
								<td>{{$category->description}}</td>
								@if($category->name == 'Uncategorized')
								<td>
									<a href="{{route('categories.edit',$category->id)}}" class="text-dark"><i class="fa fa-edit update"></i></a>
									<button type="submit" style="border: none;">
											<i class="fa fa-trash destroy disabled"></i>
									</button>
								</td>
								@else
								<td style="width: 90px;">
									{!! Form::open(['method'=>'DELETE','action'=>['AdminCategoriesController@destroy',$category->id]]) !!}
										<a href="{{route('categories.edit',$category->id)}}" class="text-dark"><i class="fa fa-edit update"></i></a>
										<button type="submit" style="border: none;">
											<i class="fa fa-trash destroy"></i>
										</button>
									{!! Form::close() !!}
								</td>
								@endif
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