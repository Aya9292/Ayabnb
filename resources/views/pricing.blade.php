@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="/css/createRoom.css">
<link rel="stylesheet" href="/css/pricing.css">
<link rel="stylesheet" href="/css/roomMenu.css">

@endsection
@section('content')
<div class="container">
    <div class="row">
        @include('partials/roomMenu',compact('room'))
        <div class="col-9">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Pricing
                </div>
                <div class="panel-body">
                    <div class="container">
                        <form class="edit_room" id="edit_room" action="/rooms/{{$room->id}}/pricing/update" method="post">
                        @csrf
                            <div>
                                <div class="form-group">
                                    <label>Price</label>
                                    <input placeholder="eg: $100" class="form-control" required="required" type="text" name="price" id="room_price" value="{{$room->price}}">
                                </div>
                            </div>
                            <div class="text-center">
                                <input type="submit" name="commit" value="Save" class="btn btn-form" data-disable-with="Save">
                            </div>
                        </form>               
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection