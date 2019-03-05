@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-12">
                <div class="row">
                    <div class="col-xl-8 col-lg-12 mx-auto">
                    <h1 class="mb-3">Register</h1>
        
                    <form action="{{ route('register') }}" method="post" class="probootstrap-form">
                        @csrf

                        <div class="form-group">
                            <label for="username">Pen Name</label>
                            <input type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" id="username" name="username" value="{{ old('username') }}" required autofocus>
                            <small id="usernameHelpBlock" class="form-text text-muted">
                                You will have the option to set your real name later on and either choose to use it as your display name or use this pen name instead.
                            </small>
                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('username') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" id="email" name="email" value="{{ old('email') }}" required>
    
                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" id="password" name="password" required>
                            <small id="passwordHelpBlock" class="form-text text-muted">
                                Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
                            </small>
                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="password_confirmation">Confirm Password</label>
                            <input type="password_confirmation" class="form-control" id="password_confirmation" name="password_confirmation">
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" id="submit" name="submit" value="Register">
                        </div>
                    </form>
                    
                    <a class="mt-3 d-block" href="{{ route('login') }}">Already have an account? Login</a>

                    </div>
                </div>
            
            </div>
        </div>
        <!-- END row -->
    </div>
@endsection