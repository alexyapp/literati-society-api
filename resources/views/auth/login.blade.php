@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-xl-8 col-lg-12">
            <div class="row">
                <div class="col-xl-8 col-lg-12 mx-auto">
                <h1 class="mb-3">Login</h1>
    
                <form action="{{ route('login') }}" method="post" class="probootstrap-form">
                    @csrf

                    <div class="form-group">
                        <label for="username">Username or Email</label>
                        <input type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" id="username" name="username" value="{{ old('username') }}" required autofocus>

                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('username') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" id="password" name="password" required>

                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-row mb-2 mb-3">
                        <div class="col-12 text-left col-md-6 mb-2 mb-md-0">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="custom-control-label" for="remember">Remember Me</label>
                            </div>
                        </div>
                        <div class="col-12 text-left col-md-6 text-md-right mb-0">
                            @if (Route::has('password.request'))
                                <a href="">
                                    Forgot Your Password?
                                </a>
                            @endif
                        </div>
                    </div>

                    <div class="form-group mb-2">
                        <input type="submit" class="btn btn-primary w-100" id="submit" name="submit" value="Login">
                    </div>
                </form>
                
                <p class="text-center mb-2">or</p>
                
                <a id="facebook-login-button" class="btn btn-primary btn-block" href="{{ route('login.facebook') }}">
                    {{-- <img src={{ asset('images/facebook-logo.svg') }} alt="Facebook Logo" /> Login with Facebook --}}
                    Login with Facebook
                </a>

                <a class="mt-3 d-block" href="{{ route('register') }}">Don't have an account? Sign up.</a>

                </div>
            </div>
        
        </div>
    </div>
    <!-- END row -->
</div>
@endsection
