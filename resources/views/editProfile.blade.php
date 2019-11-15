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
                        <form id="edit_user" action="/update/profile" accept-charset="UTF-8" method="post" class="edit_user">
                        @csrf
                           <div class="form-group">
                                <div class="field_with_errors">
                                    <input autofocus="autofocus" placeholder="Full Name" type="text" value="{{auth()->user()->name}}" name="name" id="user_name" class="form-control">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <div class="field_with_errors">
                                    <input autofocus="autofocus" placeholder="Email" type="email" value="{{auth()->user()->email}}" name="email" id="user_email" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <input autocomplete="off" placeholder="New Password (leave blank if you don't want to change it)" type="password" name="password" id="user_password" class="form-control"></div>
                                <div class="form-group">
                                    <input autocomplete="off" placeholder="Confirm Password" type="password" name="password_confirmation" id="password_confirmation" class="form-control"></div>
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