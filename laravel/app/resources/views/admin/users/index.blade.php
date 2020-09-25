@extends('layouts.admin')

@section('header_section')
  <div class="col-sm-6">
    <h1 class="m-0 text-dark">Usuários</h1>
  </div><!-- /.col -->
  <div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
      <li class="breadcrumb-item"><a href="/admin">Página inícial</a></li>
      <li class="breadcrumb-item active">Usuários</li>
    </ol>
  </div><!-- /.col -->
@endsection



@section('content')
@if(Session::has('deleted_user') or Session::has('created_user') or Session::has('updated_user') )
	<div class="container">
		<div class="row">
			<div class="col-sm-12 p-4">
				<div class="alert alert-success">
					@php
						if(session('created_user') != null)
							echo session('created_user'); 
						else if(session('deleted_user') != null)
							echo session('deleted_user');
						else if(session('updated_user') != null)
							echo session('updated_user');
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
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Foto</th>
				<th>Nome</th>
				<th>Email</th>
				<th>Função</th>
				<th>Estado</th>
				<th>Ações</th>
			</tr>
		</thead>
		<tbody>
			@if($users)
				@foreach($users as $user)
					<tr>
						<td style="padding: 5px;"><img height="50" src="{{$user->getPhotoProfile()}}" class="rounded-circle "></td>
						<td>{{$user->name}}</a></td>
						<td>{{$user->email}}</td>
						<td>{{$user->role->name}}</td>
						<td>{{$user->getStatus()}}</td>
						<td>
							{!! Form::open(['method'=>'DELETE','action'=>['AdminUserController@destroy',$user->id]]) !!}
								<a href="{{route('users.edit',$user->id)}}" class="text-dark"><i class="fa fa-edit update"></i></a>
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
@endsection
