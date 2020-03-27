@extends('layouts.blog-post')

@section('content')

    <!-- Blog Post -->

    <!-- Title -->
    <h1>{{$post->title}}</h1>

    <!-- Author -->
    <p class="lead">
        by <a href="#">{{$post->user->name}}</a>
    </p>

    <hr>

    <!-- Date/Time -->
    <p><span class="glyphicon glyphicon-time"></span> Posted on {{$post->created_at->diffForHumans()}}</p>

    <hr>

    <!-- Preview Image -->
    @php
        $img = $post->photo ? $post->photo->file : 'http://placehold.it/900x300';
    @endphp
    <img class="img-responsive" src="{{$img}}" alt="">

    <hr>

    <!-- Post Content -->
    <p>{{$post->body}}</p>

    <hr>

    <!-- Blog Comments -->
@if(Auth::check())
    <!-- Comments Form -->
    @if(Session::has('comment_message'))
        <div class="alert alert-success" style="border-radius: 10px;">
            {{session('comment_message')}}
        </div>
    @endif
    <div class="well">
        <h4>Leave a Comment:</h4>
        {!! Form::open(['method'=>'POST','action'=>'PostCommentController@store']) !!}
            <input type="hidden" name="post_id" value="{{$post->id}}">
            <div class="form-group">
                {!! Form::label('body','Body:') !!}
                {!! Form::textarea('body',null,['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Submi comment',['class'=>'btn btn-info']) !!}
            </div>

        {!! Form::close() !!}

    </div>
@endif
    <hr>

    <!-- Posted Comments -->
@if(count($comments) > 0) 
    <!-- Comment -->
    @foreach($comments as $comment)
        <div class="media">
            @php
                $img = $comment->photo ? $comment->photo : 'http://placehold.it/64x64';
            @endphp
            <a class="pull-left" href="#">
                <img  class="media-object" src="{{$img}}" alt="User Photo" style=" height: 64px; border-radius: 50%;">
            </a>
            <div class="media-body">
                <h4 class="media-heading">{{$comment->author}}
                    <small>{{$comment->created_at->diffForHumans()}}</small>
                </h4>
                {{$comment->body}}

                <!-- Nested Comment -->
                <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="http://placehold.it/64x64" alt="">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">Nested Start Bootstrap
                            <small>August 25, 2014 at 9:30 PM</small>
                        </h4>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                    </div>
                    {!! Form::open(['method'=>'POST','action'=>'CommentRepliesController@store']) !!}

                        <input type="hidden" name="post_id" value="{{$post->id}}">
                        <div class="form-group">
                            {!! Form::label('body','Body:') !!}
                            {!! Form::textarea('body',null,['class'=>'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::submit('Submi comment',['class'=>'btn btn-info']) !!}
                        </div>

                    {!! Form::close() !!}
                </div>
                <!-- End Nested Comment -->

            </div>
        </div>
    @endforeach
@endif


@endsection