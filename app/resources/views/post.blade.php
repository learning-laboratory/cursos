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
    @if(Session::has('reply_message'))
        <div class="alert alert-success" style="border-radius: 10px;">
            {{session('reply_message')}}
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
                {!! Form::submit('Submi comment',['class'=>'btn btn-primary']) !!}
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
                <div>
                    <h4 class="media-heading">{{$comment->author}}
                        <small>{{$comment->created_at->diffForHumans()}}</small>
                    </h4>
                    <p>{{$comment->body}}</p>
                    <div class="container-comment-reply">
                        <button class="toggle-reply btn btn-primary pull-left">
                            Reply
                        </button>
                        <div class="comment-reply col-sm-12">
                            {!! Form::open(['method'=>'POST','action'=>'CommentRepliesController@createReply']) !!}

                                <input type="hidden" name="comment_id" value="{{$comment->id}}">
                                <div class="form-group">
                                    {!! Form::label('body','Body:') !!}
                                    {!! Form::textarea('body',null,['class'=>'form-control','rows'=>1]) !!}
                                </div>

                                <div class="form-group">
                                    {!! Form::submit('Submi comment',['class'=>'btn btn-primary']) !!}
                                </div>

                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
                @if(count($comment->replies) > 0)
                
                    @foreach($comment->replies as $reply)
                         
                         @if($reply->is_active == 1)
                            <!-- Nested Comment -->
                            <div id="nested-comment" class="media">
                                @php
                                    $img = $reply->photo ? $reply->photo : 'http://placehold.it/64x64';
                                @endphp
                                <a class="pull-left" href="#">
                                    <img  class="media-object" src="{{$img}}" alt="User Photo" style=" height: 64px; border-radius: 50%;">
                                </a>
                                <div class="media-body">
                                    <h4 class="media-heading">{{$reply->author}}
                                        <small>{{$reply->created_at->diffForHumans()}}</small>
                                    </h4>
                                   <p>{{$reply->body}}</p>
                                </div>

                                <div class="container-comment-reply">
                                    <button class="toggle-reply btn btn-primary pull-left">
                                        Reply
                                    </button>
                                    <div class="comment-reply col-sm-12">
                                        {!! Form::open(['method'=>'POST','action'=>'CommentRepliesController@createReply']) !!}

                                            <input type="hidden" name="comment_id" value="{{$comment->id}}">
                                            <div class="form-group">
                                                {!! Form::label('body','Body:') !!}
                                                {!! Form::textarea('body',null,['class'=>'form-control','rows'=>1]) !!}
                                            </div>

                                            <div class="form-group">
                                                {!! Form::submit('Submi comment',['class'=>'btn btn-primary']) !!}
                                            </div>

                                        {!! Form::close() !!}
                                    </div>
                                </div>
                             <!-- End Nested Comment -->
                        
                        </div>  
                              @endif
                    @endforeach
                @endif
            </div>
        </div>
    @endforeach
@endif

@endsection

@section('scripts')

    <script type="text/javascript">
        $(".container-comment-reply .toggle-reply").click(function(){
            $(this).next().slideToggle('show');
        });
    </script>

@endsection
