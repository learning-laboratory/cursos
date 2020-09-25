          <div class="col-lg-4 sidebar pl-lg-5 ftco-animate">
            <div class="sidebar-box">
              <form action="#" class="search-form">
                <div class="form-group">
                  <span class="fa fa-search"></span>
                  <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
                </div>
              </form>
            </div>
            <div class="sidebar-box ftco-animate">
              <div class="categories">
                <h3>Serviços</h3>
                <li><a href="#">Oil Change <span class="fa fa-chevron-right"></span></a></li>
                <li><a href="#">Batteries &amp; Brake Check <span class="fa fa-chevron-right"></span></a></li>
                <li><a href="#">Tow Truck <span class="fa fa-chevron-right"></span></a></li>
                <li><a href="#">Tire Change <span class="fa fa-chevron-right"></span></a></li>
                <li><a href="#">Engine Repair<span class="fa fa-chevron-right"></span></a></li>
              </div>
            </div>
            <div class="sidebar-box ftco-animate">
              <div class="categories">
                <h3>Categórias</h3>
                @foreach($categories as $category)
                   <li><a href="#">{{$category->name}} <span class="fa fa-chevron-right"></span></a></li>
                @endforeach
              </div>
            </div>
            <div class="sidebar-box ftco-animate">
              <h3>Ártigos recentes</h3>
              @foreach($posts as $post)
                <div class="block-21 mb-4 d-flex">
                  @php
                    $img = $post->photo ? $post->photo->file : 'http://placehold.it/900x300';
                  @endphp
                  <a class="blog-img mr-4" style="background-image: url({{$img}});"></a>
                  <div class="text">
                    <h3 class="heading"><a href="#">{{$post->title}}</a></h3>
                    <div class="meta">
                      <div><a href="#"><span class="icon-calendar"></span>{{$post->created_at->diffForHumans()}}</a></div>
                      <div><a href="#"><span class="icon-person"></span> {{$post->user->name}}</a></div>
                    </div>
                  </div>
                </div>
              @endforeach
            </div>

            <div class="sidebar-box ftco-animate">
              <h3>Tag Cloud</h3>
              <div class="tagcloud">
                @foreach($tags as $tag)
                <a href="#" class="tag-cloud-link">{{$tag->name}}</a>
                @endforeach
              </div>
            </div>

            <div class="sidebar-box ftco-animate">
              <h3>Paragraph</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
            </div>
          </div>