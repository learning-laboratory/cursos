@extends('layouts.blog')

@section('content')

    @include('includes.header')
    @include('includes.header_image')

    <section class="ftco-section">
      <div class="container">
        @if($posts)
          <div class="row">
           @foreach($posts as $post)
              <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry align-self-stretch">
                   @php
                        $img = $post->photo ? $post->photo->file : 'http://placehold.it/900x300';
                   @endphp
                  <a href="{{route('home.post',$post->slug)}}" class="block-20 rounded" style="background-image: url({{$img}});">
                  </a>
                  <div class="text mt-3">
                  	<div class="posted mb-3 d-flex">
                  		<div class="img author" style="background-image: url({{$post->user->getPhotoProfile()}});"></div>
                  		<div class="desc pl-3">
                        
                  			<span>Publicado por {{$post->user->name}}</span>
                  			<span>{{$post->created_at->diffForHumans()}}</span>
                  		</div>
                  	</div>
                    <h3 class="heading"><a href="{{route('home.post',$post->slug)}}">{{$post->title}}</a></h3>
                  </div>
                </div>
              </div>
            @endforeach
          </div>
            <div class="d-flex justify-content-center">
                {{$posts->links()}}
            </div>
        @endif
      </div>
    </section>

    @include('includes.footer')
@endsection