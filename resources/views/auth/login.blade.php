@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="/css/login.css">
@endsection

@section('content')

<body data-gr-c-s-loaded="true">    
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-4">
                <h2 class="text-center">Log in</h2>
                <br>
                <form class="new_user" id="new_user" action="{{ route('login') }}" accept-charset="UTF-8" method="POST"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="authenticity_token" value="Dy7bRVwQBxIcnjd0zrcEE4YRpDgEKbfcFgTjzOdXDtL94N0qSuMqSTdcVfVgigRERf6KNJNhyi9wMJPXsnAj1w==">
                    @csrf
                    <!-- 名前 -->
                    <div class="form-group">
                        <input autofocus="autofocus" placeholder="Email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" type="email" value="{{ old('email') }}" name="email" id="user_email" required autofocus>
                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                    <!-- パスワード -->
                    <div class="form-group">
                        <input autocomplete="off" placeholder="Password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" name="password" id="user_password" required>
                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div>
                        <input name="remember_me" type="hidden" value="0">
                        <input type="checkbox" value="1" name="remember_me" id="user_remember_me" {{ old('remember_me') ? 'checked' : '' }}> Remember Me
                        <span class="pull-right">
                        <a class="forget" href="/password/reset">Forgot Password</a>
                        </span>
                    </div> 
                    <br><br>
                    　
                    <div class="actions">
                        <input type="submit" name="commit" value="Log in" class="btn btn-normal btn-block" data-disable-with="Log in">
                    </div>
                </form>
                <hr>
                <a class="btn btn-facebook btn-block" href="/auth/facebook">Sign in with Facebook</a>
            </div>
        </div>
    </div>
</body>
@endsection
