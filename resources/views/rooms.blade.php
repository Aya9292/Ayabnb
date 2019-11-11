@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="/css/createRoom.css">
<link rel="stylesheet" href="/css/roomMenu.css">

@endsection
@section('content')
<div class="container">
    <div class="row">
        @include('partials/userRoom')
        <div class="col-9">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Create your beautiful place
                </div>
                @foreach($rooms as $room)
                <div class="panel-body">
                    
                    <div class="row">
                        <div class="col-md-2">
                            <img src="#">
                        </div>
                        <div class="col-md-7">
                            <h4>{{$room->listing_name}}</h4>
                        </div>
                        <div class="col-md-3 right">
                            <a class="btn btn-form" href="/rooms/{{$room->id}}/listing">Update</a>
                        </div>
                    </div>
                    <hr>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection