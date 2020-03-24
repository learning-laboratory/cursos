@extends('layouts.admin')

@section('content')

	<h1>Posts</h1>

	<table class="table">
		<thead>
			<tr>
				<th>Id</th>
				<th>Photo</th>
				<th>Title</th>
				<th>Category</th>
				<th>Body</th>
				<th>User</th>
				<th>Created</th>
				<th>Updated</th>
			</tr>
		</thead>
		<tbody>
			@if($posts)
				@foreach($posts as $post)
				<tr>
					<td>{{$post->id}}</td>
					@php
							$img  = $post->photo ? $post->photo->file :"http:://placehold.it/400x400"
					@endphp
					<td><img height="50" src="{{$img}}" alt="Photo"></td>
					<td>{{$post->title}}</td>
					<td>{{$post->category_id}}</td>
					<td>{{$post->body}}</td>
					<td>{{$post->user->name}}</td>
					<td>{{$post->created_at->diffForHumans()}}</td>
					<td>{{$post->updated_at->diffForHumans()}}</td>
				</tr>
				@endforeach
			@endif
		</tbody>
	</table>
@endsection