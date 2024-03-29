@extends('layouts.blog')

@section('content')
    @include('includes.header')
    @include('includes.header_slider')
        
        <section class="intro">
            <div class="container intro-wrap">
                <div class="row no-gutters">
                    <div class="col-md-12 col-lg-9 bg-intro d-sm-flex align-items-center align-items-stretch">
                        <div class="intro-box d-flex align-items-center">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <i class="flaticon-repair"></i>
                            </div>
                            <h2 class="mb-0">Are you ready? <span>Let's repair it now!</span></h2>
                        </div>
                        <a href="#" class="bg-primary btn-custom d-flex align-items-center"><span>Book an Appointment</span></a>
                    </div>
                </div>
            </div>  
        </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center pb-5 mb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <span class="subheading">We offer Services</span>
            <h2>Our car services</h2>
          </div>
        </div>
            <div class="row">
          <div class="col-md-4 services ftco-animate">
            <div class="d-block d-flex">
              <div class="icon d-flex justify-content-center align-items-center">
                    <span class="flaticon-car-service"></span>
              </div>
              <div class="media-body pl-3">
                <h3 class="heading">Oil change</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                <p><a href="#" class="btn-custom">Read more</a></p>
              </div>
            </div>
            <div class="d-block d-flex">
              <div class="icon d-flex justify-content-center align-items-center">
                    <span class="flaticon-tyre"></span>
              </div>
              <div class="media-body pl-3">
                <h3 class="heading">Tire Change</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                <p><a href="#" class="btn-custom">Read more</a></p>
              </div>
            </div> 

          </div>
          <div class="col-md-4 services ftco-animate">
            <div class="d-block d-flex">
              <div class="icon d-flex justify-content-center align-items-center">
                    <span class="flaticon-battery"></span>
              </div>
              <div class="media-body pl-3">
                <h3 class="heading">Batteries</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                <p><a href="#" class="btn-custom">Read more</a></p>
              </div>
            </div> 
            <div class="d-block d-flex">
              <div class="icon d-flex justify-content-center align-items-center">
                    <span class="flaticon-car-engine"></span>
              </div>
              <div class="media-body pl-3">
                <h3 class="heading">Engine Repair</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                <p><a href="#" class="btn-custom">Read more</a></p>
              </div>
            </div>    
          </div>

          <div class="col-md-4 services ftco-animate">
            <div class="d-block d-flex">
              <div class="icon d-flex justify-content-center align-items-center">
                    <span class="flaticon-tow-truck"></span>
              </div>
              <div class="media-body pl-3">
                <h3 class="heading">Tow Truck</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                <p><a href="#" class="btn-custom">Read more</a></p>
              </div>
            </div>
            <div class="d-block d-flex">
              <div class="icon d-flex justify-content-center align-items-center">
                    <span class="flaticon-repair"></span>
              </div>
              <div class="media-body pl-3">
                <h3 class="heading">Car Maintenance</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                <p><a href="#" class="btn-custom">Read more</a></p>
              </div>
            </div>       
          </div>
        </div>
        </div>
    </section>
    
    <section class="ftco-section ftco-no-pt ftco-no-pb bg-light">
        <div class="container">
            <div class="row d-flex no-gutters">
                <div class="col-md-6 d-flex">
                    <div class="img img-video d-flex align-self-stretch align-items-center justify-content-center mb-4 mb-sm-0" style="background-image:url(/images/about.jpg);">
                        <a href="https://vimeo.com/45830194" class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
                            <span class="fa fa-play"></span>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 pl-md-5">
                    <div class="row justify-content-start py-5">
                  <div class="col-md-12 heading-section ftco-animate">
                    <span class="subheading">Welcome to Autorepair</span>
                    <h2 class="mb-4">We help more than 45 years serving customer car</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.
                </p>
                    <div class="tabulation-2 mt-4">
                                    <ul class="nav nav-pills nav-fill d-md-flex d-block">
                                      <li class="nav-item mb-md-0 mb-2">
                                        <a class="nav-link active py-2" data-toggle="tab" href="#home1">Our Mission</a>
                                      </li>
                                      <li class="nav-item px-lg-2 mb-md-0 mb-2">
                                        <a class="nav-link py-2" data-toggle="tab" href="#home2">Our Vision</a>
                                      </li>
                                      <li class="nav-item">
                                        <a class="nav-link py-2 mb-md-0 mb-2" data-toggle="tab" href="#home3">Our Value</a>
                                      </li>
                                    </ul>
                                    <div class="tab-content rounded mt-2">
                                      <div class="tab-pane container p-0 active" id="home1">
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                                      </div>
                                      <div class="tab-pane container p-0 fade" id="home2">
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                                      </div>
                                      <div class="tab-pane container p-0 fade" id="home3">
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                                      </div>
                                    </div>
                                </div>
                  </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <section class="ftco-counter" id="section-counter">
        <div class="container">
                <div class="row">
          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <strong class="number" data-number="45">0</strong>
              </div>
              <div class="text">
                <span>Years of Experienced</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <strong class="number" data-number="8500">0</strong>
              </div>
              <div class="text">
                <span>Project completed</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <strong class="number" data-number="2342">0</strong>
              </div>
              <div class="text">
                <span>Happy Customers</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <strong class="number" data-number="30">0</strong>
              </div>
              <div class="text">
                <span>Award Winning</span>
              </div>
            </div>
          </div>
        </div>
        </div>
    </section>

        <section class="ftco-appointment ftco-section ftco-no-pt ftco-no-pb img" style="background-image: url(/images/bg_3.jpg);">
            <div class="overlay"></div>
        <div class="container">
            <div class="row d-md-flex justify-content-end">
                <div class="col-md-12 col-lg-6 half p-3 py-5 pl-lg-5 ftco-animate heading-section heading-section-white">
                    <span class="subheading">Booking an Appointment</span>
                    <h2 class="mb-4">Free Consultation</h2>
                    <form action="#" class="appointment">
                        <div class="row">
                            <div class="col-md-12">
                                    <div class="form-group">
                                    <div class="form-field">
                                <div class="select-wrap">
                          <div class="icon"><span class="fa fa-chevron-down"></span></div>
                          <select name="" id="" class="form-control">
                            <option value="">Select services</option>
                            <option value="">Change Oil</option>
                            <option value="">Engine Repair</option>
                            <option value="">Battery Replace</option>
                            <option value="">Change Tire</option>
                            <option value="">Tow Truck</option>
                          </select>
                        </div>
                          </div>
                                </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                          <input type="text" class="form-control" placeholder="Your Name">
                        </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                          <input type="text" class="form-control" placeholder="Vehicle number">
                        </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <div class="input-wrap">
                                <div class="icon"><span class="fa fa-calendar"></span></div>
                                <input type="text" class="form-control appointment_date" placeholder="Date">
                            </div>
                                </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <div class="input-wrap">
                                <div class="icon"><span class="fa fa-clock-o"></span></div>
                                <input type="text" class="form-control appointment_time" placeholder="Time">
                            </div>
                                </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                          <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                        </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                          <input type="submit" value="Send message" class="btn btn-dark py-3 px-4">
                        </div>
                                </div>
                        </div>
              </form>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section testimony-section bg-light">
      <div class="container">
        <div class="row justify-content-center pb-5 mb-3">
          <div class="col-md-7 heading-section heading-section-white text-center ftco-animate">
            <span class="subheading">Testimonies</span>
            <h2>Happy Clients &amp; Feedbacks</h2>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel ftco-owl">
              <div class="item">
                <div class="testimony-wrap py-4">
                    <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class="d-flex align-items-center">
                        <div class="user-img" style="background-image: url(/images/person_1.jpg)"></div>
                        <div class="pl-3">
                            <p class="name">Roger Scott</p>
                            <span class="position">Marketing Manager</span>
                          </div>
                      </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                    <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class="d-flex align-items-center">
                        <div class="user-img" style="background-image: url(/images/person_2.jpg)"></div>
                        <div class="pl-3">
                            <p class="name">Roger Scott</p>
                            <span class="position">Marketing Manager</span>
                          </div>
                      </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                    <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class="d-flex align-items-center">
                        <div class="user-img" style="background-image: url(/images/person_3.jpg)"></div>
                        <div class="pl-3">
                            <p class="name">Roger Scott</p>
                            <span class="position">Marketing Manager</span>
                          </div>
                      </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                    <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class="d-flex align-items-center">
                        <div class="user-img" style="background-image: url(/images/person_1.jpg)"></div>
                        <div class="pl-3">
                            <p class="name">Roger Scott</p>
                            <span class="position">Marketing Manager</span>
                          </div>
                      </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                    <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class="d-flex align-items-center">
                        <div class="user-img" style="background-image: url(/images/person_2.jpg)"></div>
                        <div class="pl-3">
                            <p class="name">Roger Scott</p>
                            <span class="position">Marketing Manager</span>
                          </div>
                      </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
        
        <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center pb-5 mb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <span class="subheading">News &amp; Blog</span>
            <h2>Latest news from our blog</h2>
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20 rounded" style="background-image: url('images/image_1.jpg');">
              </a>
              <div class="text mt-3">
                <div class="posted mb-3 d-flex">
                    <div class="img author" style="background-image: url(/images/person_2.jpg);"></div>
                    <div class="desc pl-3">
                        <span>Posted by John doe</span>
                        <span>24 February 2020</span>
                    </div>
                </div>
                <h3 class="heading"><a href="#">Best wheel alignment &amp; air conditioning</a></h3>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20 rounded" style="background-image: url('images/image_2.jpg');">
              </a>
              <div class="text mt-3">
                <div class="posted mb-3 d-flex">
                    <div class="img author" style="background-image: url(/images/person_3.jpg);"></div>
                    <div class="desc pl-3">
                        <span>Posted by John doe</span>
                        <span>24 February 2020</span>
                    </div>
                </div>
                <h3 class="heading"><a href="#">Best wheel alignment &amp; air conditioning</a></h3>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20 rounded" style="background-image: url('images/image_3.jpg');">
              </a>
              <div class="text mt-3">
                <div class="posted mb-3 d-flex">
                    <div class="img author" style="background-image: url(/images/person_1.jpg);"></div>
                    <div class="desc pl-3">
                        <span>Posted by John doe</span>
                        <span>24 February 2020</span>
                    </div>
                </div>
                <h3 class="heading"><a href="#">Best wheel alignment &amp; air conditioning</a></h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-center pb-5 mb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <span class="subheading">Price &amp; Plans</span>
            <h2>Pricing</h2>
          </div>
        </div>
            <div class="row">
                <div class="col-md-6 col-lg-3 ftco-animate">
              <div class="block-7">
                <div class="text-center">
                <span class="excerpt d-block">First PMS</span>
                <span class="price"><sup>$</sup> <span class="number">78.98</span></span>
                
                <div class="pricing-text">
                  <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                </div>

                <a href="#" class="btn btn-secondary d-block px-2 py-3">Get Started</a>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-3 ftco-animate">
              <div class="block-7">
                <div class="text-center">
                <span class="excerpt d-block">Engine Diagnostics</span>
                <span class="price"><sup>$</sup> <span class="number">83.75</span></span>
                
                <div class="pricing-text">
                  <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                </div>

                <a href="#" class="btn btn-secondary d-block px-2 py-3">Get Started</a>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-3 ftco-animate">
              <div class="block-7">
                <div class="text-center">
                <span class="excerpt d-block">Tow Truck</span>
                <span class="price"><sup>$</sup> <span class="number">85.00</span></span>
                
                <div class="pricing-text">
                  <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                </div>

                <a href="#" class="btn btn-secondary d-block px-2 py-3">Get Started</a>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-3 ftco-animate">
              <div class="block-7">
                <div class="text-center">
                <span class="excerpt d-block">Car Wash</span>
                <span class="price"><sup>$</sup> <span class="number">30.50</span></span>
                
                <div class="pricing-text">
                  <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                </div>

                <a href="#" class="btn btn-secondary d-block px-2 py-3">Get Started</a>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>
    @include('includes.footer')
@endsection

<!--DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

   
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html-->
