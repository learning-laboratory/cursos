@extends('layouts.admin')
@section('styles')
	<link rel="stylesheet" type="text/css" href="/css/dropzone.min.css">
	<link rel="stylesheet" type="text/css" href="/css/basic.min.css">
@endsection

@section('content')

@section('header_section')
  <div class="col-sm-6">
    <h1 class="m-0 text-dark">Media</h1>
  </div><!-- /.col -->
  <div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
      <li class="breadcrumb-item"><a href="/admin">Página inícial</a></li>
      <li class="breadcrumb-item active">Media</li>
    </ol>
  </div><!-- /.col -->
@endsection

@include('includes.form_errors')
				
			
<div class="card card-secondary" style="width: 100%;">
    <div class="card-header">
    </div>
    <div class="card-body">
    	<div class="card">
    		<div class="card-header">
				<button class="btn btn-sm btn-primary"  data-toggle="modal" data-target="#modal-lg">Adicionar</button>
			<div class="card-tools pt-1">
				{{$photos->links()}} 
            </div>
    		</div>
            <div class="card-body">
            	<div class="container">
					<div class="row">
						@foreach($photos as $photo)
						<div class="col-md-2 p-2 media">
							<div class="trash">
								{!! Form::open(['method'=>'DELETE','action'=>['AdminMediaController@destroy',$photo->id]]) !!}
								<img src="{{$photo->file}}">
								<button type="submit" style="border: none;">
									<i class="fa fa-times-circle destroy"></i>
								</button>
								{!! Form::close() !!}
							</div>
						</div>
						@endforeach
					</div>
				</div>
            </div>
    	</div>
    </div>
 </div>

  <div class="modal fade" id="modal-lg">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Upload Media</h4>
        </div>
        <div class="modal-body">
           	{!! Form::open(['method'=>'POST','action'=>'AdminMediaController@store','class'=>'dropzone']) !!}
			{!! Form::close() !!}
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" ><a href="{{route('media.index')}}">Fechar</a></button>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->

@endsection
   
@section('scripts')
	<script type="text/javascript" src="/js/dropzone-amd-module.min.js"></script>
	<script type="text/javascript" src="/js/dropzone.min.js"></script>
		<script type="text/javascript">
	(function($) {

	 var pagination =  $('.card-tools .pagination');
	 pagination.addClass('pagination-sm');

	 
	})(jQuery);
	</script>
@endsection