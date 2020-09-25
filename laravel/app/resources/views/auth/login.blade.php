@extends('layouts.app2')

@section('content')
<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>SIBA</b> Services.</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>

        <form method="POST" action="{{ route('login') }}">
            @csrf
	        <div class="input-group row mb-4">
	            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">
	            <div class="input-group-append">
		            <div class="input-group-text">
		              <span class="fas fa-envelope"></span>
		            </div>
	          	</div>
	            @error('email')
	                <span class="invalid-feedback" role="alert">
	                    <strong>{{ $message }}</strong>
	                </span>
	            @enderror                          
	        </div>

            <div class="input-group row mb-4">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="current-password" required placeholder="Password">
                <div class="input-group-append">
		            <div class="input-group-text">
		              <span class="fas fa-lock"></span>
		            </div>
	          	</div>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

          	<div class="row mb-3">
	          	<div class="col-8">
	            	<div class="icheck-primary">
		                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
		              	<label for="remember">
		               {{ __('Remember Me') }}
		              	</label>
	            	</div>
	          	</div>
         		<!-- /.col -->
		        <div class="col-4">
		           <button type="submit" class="btn btn-primary btn-block">Sign In</button>
		        </div>
		        <!-- /.col -->
        	</div>
        </form>
    </div>
    <!-- /.login-card-body -->

  </div>
    <div class="card">
    <div class="card-body login-card-body">
      <p class="mb-1">
        @if (Route::has('password.request'))
	        <a class="btn btn-link" href="{{ route('password.request') }}">
	            {{ __('I forgot my password') }}
	        </a>
        @endif
      </p>
      <p class="mb-0">
        <i class="fa fa-angle-double-left"></i> back to <a href="{{route('home')}}" class="text-center">{{ config('app.name', 'Threes') }}</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
@endsection