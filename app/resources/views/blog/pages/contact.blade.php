@extends('layouts.blog')

@section('content')
	@include('includes.header')
  @include('includes.header_image')
    <section class="ftco-section bg-light">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-12">
            <div class="wrapper">
              <div class="row no-gutters">
                <div class="col-md-7 d-flex">
                  <div class="contact-wrap w-100 p-md-5 p-4">
                    <h3 class="mb-4">Get in touch</h3>
                    <form method="POST" id="contactForm" class="contactForm">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                          </div>
                        </div>
                        <div class="col-md-6"> 
                          <div class="form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group">
                            <textarea name="message" class="form-control" id="message" cols="30" rows="7" placeholder="Message"></textarea>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group">
                            <input type="submit" value="Send Message" class="btn btn-dark">
                            <div class="submitting"></div>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="col-md-5 d-flex align-items-stretch">
                  <div class="info-wrap bg-dark w-100 p-lg-5 p-4">
                    <h3 class="mb-4 mt-md-4">$page_name</h3>
                    <div class="dbox w-100 d-flex align-items-start">
                      <div class="icon d-flex align-items-center justify-content-center">
                        <span class="fa fa-map-marker"></span>
                      </div>
                      <div class="text pl-3">
                        <p><span>Address:</span> 198 West 21th Street, Suite 721 New York NY 10016</p>
                      </div>
                    </div>
                    <div class="dbox w-100 d-flex align-items-center">
                      <div class="icon d-flex align-items-center justify-content-center">
                        <span class="fa fa-phone"></span>
                      </div>
                      <div class="text pl-3">
                        <p><span>Phone:</span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
                      </div>
                    </div>
                    <div class="dbox w-100 d-flex align-items-center">
                      <div class="icon d-flex align-items-center justify-content-center">
                        <span class="fa fa-paper-plane"></span>
                      </div>
                      <div class="text pl-3">
                        <p><span>Email:</span> <a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
                      </div>
                    </div>
                    <div class="dbox w-100 d-flex align-items-center">
                      <div class="icon d-flex align-items-center justify-content-center">
                        <span class="fa fa-globe"></span>
                      </div>
                      <div class="text pl-3">
                        <p><span>Website</span> <a href="#">yoursite.com</a></p>
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
	@include('includes.footer')
@endsection