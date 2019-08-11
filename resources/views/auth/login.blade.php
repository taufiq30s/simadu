@extends('layouts.app')
@section('content')
<div class="login-body">

</div>
<div class="container">
  <div class="row justify-content-center">
    <div class="login-box">
      <div class="login-logo">
        <a href="" class="text-light"><b>SISFO</b> Simadu</a>
      </div>
      <div class="card login-card">
        <div class="card-body login-card-body">
          <div class="text-center text-success">
            <h3>Login</h3>
          </div>
          <div class="login-icon m-auto text-center text-success border-success"><i class="fas fa-unlock fa-3x"></i></div>
          <p class="login-box-msg mt-2">Sign in to start your session</p>
          <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- <div class="form-group"> -->
              <!-- <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label> -->
              <div class="input-group mb-3 login-form-input">
                <input id="username" type="username" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" placeholder="Username" required autofocus>
                <div class="input-group-append input-group-text">
                  <span class="fas fa-user"></span>
                </div>
              </div>
              @if ($errors->has('username'))
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('username') }}</strong>
                </span>
              @endif
            <!-- </div> -->
            <div class="input-group mb-3 login-form-input">
                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Password">
                <div class="input-group-append input-group-text">
                  <span class="fas fa-key"></span>
                </div>
                @if ($errors->has('password'))
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('password') }}</strong>
                  </span>
                @endif
            </div>

            <div class="row">
              <div class="col col-6">
                <div class="form-group">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                  </div>
                </div>
              </div>
              <div class="col col-6">
                <div class="form-group row mb-0 ml-auto">
                  <button type="submit" class="btn btn-primary ml-auto" style="margin-right:5px;">
                    {{ __('Login') }}
                  </button>

                  @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                  @endif
                </div>
              </div>
            </div>



          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
