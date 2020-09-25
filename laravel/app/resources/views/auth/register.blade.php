@extends('layouts.app2')

@section('content')
<div class="register-box">
  <div class="register-logo">
    <a href="#"><b>SIBA</b>Services.</a>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      	<p class="login-box-msg">Register a new membership</p>
        <form method="POST" action="{{ route('register') }}">
	        @csrf
	        <input type="hidden" name="role_id" value="{{4}}">
	        <input type="hidden" name="is_active" value="{{1}}">
	        <div class="input-group mb-3">
	          <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Full name">
              @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
              @enderror
	          <div class="input-group-append">
	            <div class="input-group-text">
	              <span class="fas fa-user"></span>
	            </div>
	          </div>
	        </div>

	        <div class="input-group mb-3">
          		<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
	          <div class="input-group-append">
	            <div class="input-group-text">
	              <span class="fas fa-envelope"></span>
	            </div>
	          </div>
	        </div>


	        <div class="input-group mb-3">
              <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">

	          @error('password')
	            <span class="invalid-feedback" role="alert">
	                <strong>{{ $message }}</strong>
                </span>	            
              @enderror
	          <div class="input-group-append">
	            <div class="input-group-text">
	              <span class="fas fa-lock"></span>
	            </div>
	          </div>
	        </div>

	        <div class="input-group mb-3">
	        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Retype password">
	          <div class="input-group-append">
	            <div class="input-group-text">
	              <span class="fas fa-lock"></span>
	            </div>
	          </div>
	        </div>
	        <div class="row">
	          <div class="col-8">
	            <div class="icheck-primary">
	              <input type="checkbox" id="agreeTerms" name="terms" value="agree" required>
	              <label for="agreeTerms">
	               I agree to the <a href="#">terms</a>
	              </label>
	            </div>
	          </div>
	          <!-- /.col -->
	          <div class="col-4">
	            <button type="submit" class="btn btn-primary btn-block">Register</button>
	          </div>
	          <!-- /.col -->
	        </div>
      </form>

    </div>
    <!-- /.form-box -->

  </div><!-- /.card -->

  <div class="card">
    <div class="card-body register-card-body">
      <a href="{{route('login')}}" class="text-center">I already have a membership</a>
    </div>
   </div>
</div>
<!-- /.register-box -->
@endsection