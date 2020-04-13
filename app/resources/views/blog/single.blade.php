@extends('layouts.blog')

@section('content')
@include('includes.header')
  @include('includes.header_image')

      <div class="container p-5">
        <div class="row">
          <div class="col-lg-8 ftco-animate">
            <h2 class="mb-3">{{$post->title}}</h2>

            <div class="tag-widget post-tag-container mb-2 mt-2">
              <div class="tagcloud">
                @if($post->categories)
                  @foreach($post->categories as $category)
                    <a href="" class="tag-cloud-link">{{$category->name}}</a>
                  @endforeach
                @endif
              </div>
          </div>
            <h6 class="p-2 bg-light">Publicado a {{$post->created_at->diffForHumans()}}</h6>
            <p>
              @php
                $img = $post->photo ? $post->photo->file : 'http://placehold.it/900x300';
              @endphp
              <img src="{{$img}}" class="img-fluid">
            </p>
            {{$post->body}}

            <div class="tag-widget post-tag-container mb-5 mt-5">
              <div class="tagcloud">
                <a class="tag-cloud-link text-dark">Tags:</a>
                @if($post->tags)
                  @foreach($post->tags as $tag)
                    <a href="" class="tag-cloud-link">{{$tag->name}}</a>
                  @endforeach
                @endif
              </div>
            </div>
            
            <div class="about-author d-flex p-4 bg-light">
              <div class="bio mr-4">
                <img src="{{$post->user->getPhotoProfile()}}" alt="Image placeholder" class="img-fluid rounded-circle" style="width: 325px;">
              </div>
              <div class="desc">
                <h4>{{$post->user->name}}</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa
                sunt placeat nam vero culpa!</p>
              </div>
            </div>
             @if(Auth::check())
                @if(Session::has('comment_message'))
                    <div class="alert alert-success" style="padding: 10px; border-radius: 10px;">
                        {{session('comment_message')}}
                    </div>
                @endif
                 
                @if(Session::has('reply_message'))
                    <div class="alert alert-success" style="border-radius: 10px;">
                        {{session('reply_message')}}
                    </div>
                @endif
                 <div class="comment-form-wrap pt-5">
                    <h3 class="mb-4">Deixe o seu comentário</h3>
                      {!! Form::open(['method'=>'POST','action'=>'PostCommentController@store','class'=>'p-5 bg-light']) !!}
                        <input type="hidden" name="post_id" value="{{$post->id}}">
                        <div class="form-group">
                            {!! Form::label('body','Comentário:') !!}
                            {!! Form::textarea('body',null,['class'=>'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::submit('Enviar',['class'=>'btn btn-primary']) !!}
                        </div>

                      {!! Form::close() !!}
                </div>
                <div class="pt-5 mt-5">
                  <h3 class="mb-4">Comentários</h3>
                  <ul class="comment-list">
                     @if(count($comments) > 0) 
                         @foreach($comments as $comment)
                            <li class="comment">
                              <div class="vcard bio">
                                <img src="{{$comment->getPhotoProfile()}}" alt="Image placeholder">
                              </div>
                              <div class="comment-body">
                                  <h3>{{$comment->author}}</h3>
                                  <div class="meta">{{$comment->created_at->diffForHumans()}}</div>
                                  <p>{{$comment->body}}</p>
                                  <div class="container-comment-reply">
                                    <button class="toggle-reply reply" style="border: none;">Responder</button>
                                    <div class="comment-reply col-sm-12">
                                      {!! Form::open(['method'=>'POST','action'=>'CommentRepliesController@createReply']) !!}

                                          <input type="hidden" name="comment_id" value="{{$comment->id}}">
                                          <div class="form-group">
                                              {!! Form::label('body','Comentário:') !!}
                                              {!! Form::textarea('body',null,['class'=>'form-control','rows'=>1]) !!}
                                          </div>

                                          <div class="form-group">
                                              {!! Form::submit('Enviar',['class'=>'btn btn-primary']) !!}
                                          </div>

                                      {!! Form::close() !!}
                                    </div>
                                  </div>
                              </div>

                              @if(count($comment->replies) > 0)
                                @foreach($comment->replies as $reply)
                                  @if($reply->is_active == 1)
                                    <ul class="children">
                                      <li class="comment">
                                        <div class="vcard bio">
                                          <img src="{{$reply->getPhotoProfile()}}" alt="Image placeholder">
                                        </div>
                                        <div class="comment-body">
                                          <h3>{{$reply->author}}</h3>
                                          <div class="meta">{{$reply->created_at->diffForHumans()}}</div>
                                          <p>{{$reply->body}}</p>
                                          <div class="container-comment-reply">
                                            <button class="toggle-reply reply" style="border: none;">Responder</button>
                                            <div class="comment-reply col-sm-12">
                                              {!! Form::open(['method'=>'POST','action'=>'CommentRepliesController@createReply']) !!}

                                                  <input type="hidden" name="comment_id" value="{{$comment->id}}">
                                                  <div class="form-group">
                                                      {!! Form::label('body','Comentário:') !!}
                                                      {!! Form::textarea('body',null,['class'=>'form-control','rows'=>1]) !!}
                                                  </div>

                                                  <div class="form-group">
                                                      {!! Form::submit('Enviar',['class'=>'btn btn-primary']) !!}
                                                  </div>

                                              {!! Form::close() !!}
                                          </div>
                                          </div>
                                        </div>
                                      </li>
                                    </ul>
                                  @endif
                                @endforeach
                              @endif
                            </li>
                         @endforeach
                      @endif
                  </ul>
                  <!-- END comment-list -->
                </div>
              @endif
          </div> <!-- .col-md-8 -->

          <!-- sidebar -->
           @include('includes.sidebar')
          <!-- end of sidebar-->

        </div>
      </div>

@include('includes.footer')
      
@endsection



@section('scripts')

    <script type="text/javascript">
        $(".container-comment-reply .toggle-reply").click(function(){
             $(this).next().slideToggle('show');
        });
    </script>

@endsection