@extends('layouts.admin')

@section('content')

@section('header_section')
  <div class="col-sm-6">
    <h1 class="m-0 text-dark">Respostas</h1>
  </div><!-- /.col -->
  <div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
      <li class="breadcrumb-item"><a href="/admin">Página inícial</a></li>
      <li class="breadcrumb-item active">Respostas</li>
    </ol>
  </div><!-- /.col -->
@endsection

@include('includes.form_errors')
@if(Session::has('deleted_comment_reply'))
	<div class="container">
		<div class="row">
			<div class="col-sm-12 p-4">
				<div class="alert alert-success">
					@if(session('deleted_comment_reply') != null)
						{{session('deleted_comment_reply')}}
					@endif
				</div>
			</div>			
		</div>
	</div>
@endif

<div class="card card-secondary" style="width: 100%;">
    <div class="card-header">
    </div>
    <div class="card-body">
    	<div class="card">
    		<div class="card-header">
    			     <h3 class="card-title"></h3>
					<div class="card-tools">
					
		            </div>
    		</div>
    		<div class="card-body">
    				<table class="table">
		<thead>
			<tr>
				<th>Autor</th>
				<th>Email</th>
				<th>Resposta</th>
				<th>Ártigo</th>
				<th  colspan="2" style="width: 170px;">Ações</th>
			</tr>
		</thead>	
		<tbody>
			@if(count($replies) > 0)
				@foreach($replies as $reply)			
					<tr>
						<td>{{$reply->author}}</td>
						<td>{{$reply->email}}</td>
						<td>{{$reply->body}}</td>
						<td>{{$reply->comment->post->title}}</td>
						<td style="width: 170px;">
							<div class="container">
								<div class="row">
									<div class="col">
										@if($reply->is_active == 1)
											{!! Form::model($reply,['method'=>'PATCH','action'=>['CommentRepliesController@update',$reply->id]]) !!}
												<input type="hidden" name="is_active" value="0">
												<div class="form-group">
													{!! Form::submit('desaprovar',['class'=>'btn btn-warning btn-sm']) !!}
												</div>
											{!! Form::close() !!}
										@else
											{!! Form::model($reply,['method'=>'PATCH','action'=>['CommentRepliesController@update',$reply->id]]) !!}
												<input type="hidden" name="is_active" value="1">
												<div class="form-group">
													{!! Form::submit('aprovar',['class'=>'btn btn-success btn-sm']) !!}
												</div>
											{!! Form::close() !!}
										@endif
									</div>
									<div class="col">
										{!! Form::model($reply,['method'=>'DELETE','action'=>['CommentRepliesController@destroy',$reply->id]]) !!}
											<div class="form-group">
												<button type="submit" style="border: none;">
													<i class="fa fa-trash destroy"></i>
												</button>
											</div>
							 			{!! Form::close() !!}
									</div>
								</div>
							</div>
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