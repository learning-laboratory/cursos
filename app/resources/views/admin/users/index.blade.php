@extends('layouts.admin')

@section('content')
	
	@if(Session::has('deleted_user'))
		<p class="bg-success" style="padding: 10px; border-radius: 10px;">{{ session('deleted_user') }}</p>
	@endif
	
	<h1>Users</h1>
	<table class="table">
		<thead>
			<tr>
				<th>Id</th>
				<th>Photo</th>
				<th>Name</th>
				<th>Email</th>
				<th>Role</th>
				<th>Status</th>
				<th>Created</th>
				<th>Action</th>

			</tr>
		</thead>
		<tbody>
			@if($users)
				@foreach($users as $user)
					<tr>
						<td>{{$user->id}}</td>
						@php
							$img  = $user->photo ? $user->photo->file :"http:://placehold.it/400x400"
						@endphp
						<td><img height="50" src="{{$img}}"></td>
						<td><a href="{{route('users.edit',$user->id)}}">{{$user->name}}</a></td>
						<td>{{$user->email}}</td>
						<td>{{$user->role->name}}</td>
						<td>{{$user->is_active == 1 ? "Active" :"No active"}}</td>
						<td>{{$user->created_at->diffForHumans()}}</td>
						<td>{{$user->updated_at->diffForHumans()}}</td>
					</tr>
				@endforeach
			@endif
		</tbody>
	</table>
@endsection