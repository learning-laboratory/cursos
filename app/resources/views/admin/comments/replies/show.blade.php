@extends('layouts.admin')

@section('content')

	<h1>Replies</h1>

	<table class="table">
		<thead>
			<tr>
				<th>Id</th>
				<th>Author</th>
				<th>Email</th>
				<th>Body</th>
				<th>Post</th>
				<th  colspan="2">Actions</th>
			</tr>
		</thead>	
		<tbody>
			@if(count($replies) > 0)
				@foreach($replies as $reply)			
					<tr>
						<td>{{$reply->id}}</td>
						<td>{{$reply->author}}</td>
						<td>{{$reply->email}}</td>
						<td>{{$reply->body}}</td>
						<td><a href="{{route('home.post',$reply->comment->post->id)}}">{{$reply->comment->post->title}}</a></td>
						<td>
							@if($reply->is_active == 1)
								{!! Form::model($reply,['method'=>'PATCH','action'=>['CommentRepliesController@update',$reply->id]]) !!}
									<input type="hidden" name="is_active" value="0">
									<div class="form-group">
										{!! Form::submit('un-aprove',['class'=>'btn btn-warning']) !!}
									</div>
								{!! Form::close() !!}
							@else
								{!! Form::model($reply,['method'=>'PATCH','action'=>['CommentRepliesController@update',$reply->id]]) !!}
									<input type="hidden" name="is_active" value="1">
									<div class="form-group">
										{!! Form::submit('aprove',['class'=>'btn btn-success']) !!}
									</div>
								{!! Form::close() !!}
							@endif
						</td>
						<td>
							{!! Form::model($reply,['method'=>'DELETE','action'=>['CommentRepliesController@destroy',$reply->id]]) !!}
									<div class="form-group">
										{!! Form::submit('delete',['class'=>'btn btn-danger']) !!}
									</div>
							 {!! Form::close() !!}</td>
					</tr>
				@endforeach
			@endif 
		</tbody>
	</table>

@endsection