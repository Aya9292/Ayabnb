@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="/css/login.css">
@endsection
@section('content')


<body data-gr-c-s-loaded="true">    
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-4">
                <h2 class="text-center">Register</h2>
                <br>

  
                <form method="POST" action="{{ route('register') }}" class="new_user" id="new_user" accept-charset="UTF-8"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="authenticity_token" value="Dy7bRVwQBxIcnjd0zrcEE4YRpDgEKbfcFgTjzOdXDtL94N0qSuMqSTdcVfVgigRERf6KNJNhyi9wMJPXsnAj1w==">
                @csrf
                <!--名前のとこ -->
                    <div class="form-group">
                        <input autofocus="autofocus" placeholder="Full Name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" type="name" value="{{ old('name') }}"  name="name" id="user_name" required autofocus>
                        @if ($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>

                    <!-- mailのとこ -->
                    <div class="form-group">
                        <input autofocus="autofocus" placeholder="Email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" type="email" value="{{ old('email') }}"  name="email" id="user_email" required>
                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>

                    <!-- パスワードのとこ -->
                    <div class="form-group">
                        <input autocomplete="off" placeholder="Password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"  type="password" name="password" id="user_password" required>
                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                    <!-- コンフォームパスワード -->
                    <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
                    <br><br>
                    　
                    <div class="actions">
                        <input type="submit" name="commit" value="Register" class="btn btn-normal btn-block" data-disable-with="Register">
                    </div>
                </form>
                <hr>
                <a class="btn btn-facebook btn-block" href="/auth/facebook">Sign in with Facebook</a>
            </div>
        </div>
    </div>
</body>

@endsection
