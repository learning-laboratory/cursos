@extends('layouts.admin')

@section('content')

	<h1>Comments</h1>

	<table class="table">
		<thead>
			<tr>
				<th>Id</th>
				<th>Author</th>
				<th>Email</th>
				<th>Body</th>
				<th>Post</th>
				<th>Replies</th>
				<th  colspan="2">Actions</th>
			</tr>
		</thead>	
		<tbody>
			@if(count($comments) > 0)
				@foreach($comments as $comment)			
					<tr>
						<td>{{$comment->id}}</td>
						<td>{{$comment->author}}</td>
						<td>{{$comment->email}}</td>
						<td>{{$comment->body}}</td>
						<td><a href="{{route('home.post',$comment->post_id)}}">{{$comment->post->title}}</a></td>
						<td>
							<a href="{{route('replies.show',$comment->id)}}">View replies</a>
						</td>
						
						<td>
							@if($comment->is_active == 1)
								{!! Form::model($comment,['method'=>'PATCH','action'=>['PostCommentController@update',$comment->id]]) !!}
									<input type="hidden" name="is_active" value="0">
									<div class="form-group">
										{!! Form::submit('un-aprove',['class'=>'btn btn-warning']) !!}
									</div>
								{!! Form::close() !!}
							@else
								{!! Form::model($comment,['method'=>'PATCH','action'=>['PostCommentController@update',$comment->id]]) !!}
									<input type="hidden" name="is_active" value="1">
									<div class="form-group">
										{!! Form::submit('aprove',['class'=>'btn btn-success']) !!}
									</div>
								{!! Form::close() !!}
							@endif
						</td>
						<td>
							{!! Form::model($comment,['method'=>'DELETE','action'=>['PostCommentController@destroy',$comment->id]]) !!}
								<div class="form-group">
									{!! Form::submit('delete',['class'=>'btn btn-danger']) !!}
								</div>
							{!! Form::close() !!}
						</td>
			
					</tr>
				@endforeach
			@endif 
		</tbody>
	</table>

@endsection