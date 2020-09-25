@extends('layouts.app')

@section('content')
	<ul>

		@foreach($posts as $post)
			<div class="image-container">
				<img src="/images/{{$post->path}}">
			</div>
			<li><a href="{{route('posts.show',$post->id)}}">{{$post->title}}</a></li>
			<li>{{$post->content}}</li>
		@endforeach
	</ul>
@endsection

@yield('footer')