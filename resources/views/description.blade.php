@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="/css/createRoom.css">
<link rel="stylesheet" href="/css/description.css">
<link rel="stylesheet" href="/css/roomMenu.css">

@endsection
@section('content')
<div class="container">
    <div class="row">
        @include('partials/roomMenu')
        <div class="col-9">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Description
                </div>
                <div class="panel-body">
                    <div class="container">
                        <form class="edit_room" id="edit_room" action="/rooms/{{$room->id}}/description/update" method="post">
                        @csrf
                            <div>
                                <div class="form-group">
                                    <label>Listing name</label>
                                    <input value="{{$room->listing_name}}" placeholder="What is your listing name" class="form-control" required="required" type="text" name="listing_name" id="room_description">
                                </div>
                                <div class="form-group">
                                    <label>Summary</label>
                                    <textarea rows="5" placeholder="Summary of your house" class="form-control" required="required" name="summary" id="room_summary">{{$room->summary}}</textarea>
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