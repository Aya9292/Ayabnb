@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="/css/createRoom.css">
<link rel="stylesheet" href="/css/photos.css">

@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <ul class="sidebar-list">
                    <li class="sidebar-item">
                        <a href="/profile" class="sidebar-link active">Edit Profile</a>
                    </li>
                </ul>
                <br>
                <a href="/users/{{$user->id}}" class="btn btn-default">View My Profile</a>
            </div>
            <div class="col-md-9 text-center">
                <div class="panel panel-default">
                    <div class="panel-heading">Your Profile</div> 
                <div class="panel-body">
                    <div class="container">
                        <form id="edit_user" action="/" accept-charset="UTF-8" method="post" class="edit_user">
                            <input name="utf8" type="hidden" value="✓">
                            <input type="hidden" name="_method" value="put">
                            <input type="hidden" name="authenticity_token" value="byragB6zQQ6QLn88ZlO+7fp55XwKBgaYVJKUq1eVAY72PCu6XqNrx1FnCQu3NjSSgMmyyD7UdEh7SbP2blMbhA=="> 
                            <div class="form-group">
                                <div class="field_with_errors">
                                    <input autofocus="autofocus" placeholder="Full Name" type="text" value="" name="user[fullname]" id="user_fullname" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <input autofocus="autofocus" placeholder="Phone Number" type="text" value="" name="user[phone_number]" id="user_phone_number" class="form-control">
                            </div>
                            <div class="form-group">
                                <textarea rows="5" cols="25" autofocus="autofocus" placeholder="Description" name="user[description]" id="user_description" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <div class="field_with_errors">
                                    <input autofocus="autofocus" placeholder="Email" type="email" value="" name="user[email]" id="user_email" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <input autocomplete="off" placeholder="New Password (leave blank if you don't want to change it)" type="password" name="user[password]" id="user_password" class="form-control"></div>
                                <div class="form-group">
                                    <input autocomplete="off" placeholder="Confirm Password" type="password" name="user[password_confirmation]" id="user_password_confirmation" class="form-control"></div>
                                    <div class="actions">
                                        <input type="submit" name="commit" value="Save" data-disable-with="Save" class="btn btn-normal btn-block">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection