@extends('layouts.admin')

@section('content')

@section('header_section')
  <div class="col-sm-6">
    <h1 class="m-0 text-dark">Ártigos</h1>
  </div><!-- /.col -->
  <div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
      <li class="breadcrumb-item"><a href="/admin">Página inícial</a></li>
      <li class="breadcrumb-item active">Ártigos</li>
    </ol>
  </div><!-- /.col -->
@endsection

@include('includes.form_errors')

@if(Session::has('deleted_post') or Session::has('created_post') or Session::has('updated_post') )
	<div class="container">
		<div class="row">
			<div class="col-sm-12 p-4">
				<div class="alert alert-success">
					@php
						if(session('created_post') != null)
							echo session('created_post'); 
						else if(session('deleted_post') != null)
							echo session('deleted_post');
						else if(session('updated_post') != null)
							echo session('updated_post');
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
			<div class="col-sm-12">
				<div class="card">
		            <div class="card-header">
		                <h3 class="card-title"></h3>
					<div class="card-tools">
						{{$posts->links()}} 
		            </div>
		        	</div>
		            <div class="card-body p-0">
						<table class="table table-striped">
							<thead>
								<tr>
									<th>Título</th>
									<th>Autor</th>	
									<th>Categórias</th>
									<th>Tags</th>
									<th>Data</th>
									<th>Ações</th>
								</tr>
							</thead>
							<tbody>
								@if($posts)
									@foreach($posts as $post)
									<tr>
										<td><a href="{{route('home.post', $post->slug)}}" title="Ver o ártigo">{{$post->title}}</a></td>
										<td>{{$post->user->name}}</td>
										<td>
											@foreach($post->categories as $category)
												{{$category->name}},
											@endforeach
										</td>
										<td>
											@foreach($post->tags as $tag)
												{{$tag->name}},
											@endforeach
										</td>
										<td>{{$post->created_at->diffForHumans()}}</td>
										<td style="width: 90px;">
											{!! Form::open(['method'=>'DELETE','action'=>['AdminPostsController@destroy',$post->id]]) !!}
												<a href="{{route('posts.edit',$post->id)}}" class="text-dark" title="Actualizar"><i class="fa fa-edit update"></i></a>
												<button type="submit" style="border: none;" title="Remover">
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