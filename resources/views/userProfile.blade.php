@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="/css/profile.css">

@endsection
@section('content')
<div class="container">
    <div class="row">
<!-- 左側 -->
    <div class="col-md-3">
        <div class="center">
            <img class="avatar-full" src="https://www.gravatar.com/avatar/e154692298883610a21ce49c345a9cb2.jpg?d=identical&amp;s=150">
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">Verfication</div>
            <div class="panel-body">
                <ul class="sidebar-list">
                        <li>Email Address<span class="pull-right icon-babu"><i class="fa fa-check-circle"></i></span></li>
                    <li>Phone Number<span class="pull-right icon-babu"><i class="fa fa-check-circle"></i></span></li>
                </ul>
            </div>
        </div>
    </div>
<!-- 右側 -->
    <div class="col-md-9">
        <h2>{{$user->name}}</h2>
        <div class="description row-space-3">
            {{$user->summary}}
        </div>

        <h4>Listings ({{$user->rooms->count()}})</h4><br>
        <div class="row">
            @foreach($user->rooms as $room)
                <div class="col-md-4">
                    <div class="panel panel-default">
                        <div class="panel-heading preview">
                            <img src="{{$room->coverPhoto('thumb')}}">
                        </div>

                        <div class="panel-body">
                            <a href="/rooms/{{$room->listing_name}}">{{$room->listing_name}}</a><br>
                            {{$room->house_type}}
                                <div id="star_41" title="Not rated yet!">
                                    <img alt="1" src="/images/star-off.png" title="Not rated yet!">&nbsp;<img alt="2" src="/images/star-off.png" title="Not rated yet!">&nbsp;<img alt="3" src="/images/star-off.png" title="Not rated yet!">&nbsp;<img alt="4" src="/images/star-off.png" title="Not rated yet!">&nbsp;<img alt="5" src="/images/star-off.png" title="Not rated yet!">
                                    <input name="score" type="hidden" readonly="">
                                </div> 0 reviews
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <br>


        <h4>Reviews From Guests (0)</h4>
        <div class="row">
              <div class="text-center">
    <h4>There are no reviews.</h4>
  </div>

        </div>
        <br>

        <h4>Reviews From Hosts (0)</h4>
        <div class="row">
              <div class="text-center">
    <h4>There are no reviews.</h4>
  </div>

        </div>

    </div>
</div>
        </div>
@endsection