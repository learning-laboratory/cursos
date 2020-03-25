@extends('layouts.admin')

@section('content')
	<h1>Media</h1>
	<table class="table">
		<thead>
			<tr>
				<th>Id</th>
				<th>File</th>
				<th>Created</th>
				<th>Updated</th>
				<th>Actions</th>
			</tr>
		</thead>
		<tbody>
			@if($photos)
				@foreach($photos as $photo)
					<tr>
						<td>{{$photo->id}}</td>
						<td><img src="{{$photo->file}}" height="50"></td>
						<td>{{$photo->created_at->diffForHumans()}}</td>
						<td>{{$photo->updated_at->diffForHumans()}}</td>
						<td>
							{!! Form::open(['method'=>'DELETE','action'=>['AdminMediaController@destroy',$photo->id]]) !!}
								<div class="form-group">
									{!! Form::submit('X',['class'=>'btn btn-danger']) !!}
								</div>
							{!! Form::close() !!}
						</td>
					</tr>
				@endforeach
			@endif
		</tbody>
	</table>	
@endsection