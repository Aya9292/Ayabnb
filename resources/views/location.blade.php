@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="/css/createRoom.css">
<link rel="stylesheet" href="/css/location.css">
<link rel="stylesheet" href="/css/roomMenu.css">

@endsection
@section('content')
<div class="container">
    <div class="row">
        @include('partials/roomMenu')
        <div class="col-9">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Location
                </div>
                <div class="panel-body">
                    <div class="container">
                        <form class="edit_room" id="edit_room" action="/rooms/{{$room->id}}/location/update" method="post">
                        @csrf
                            <div>
                                <div class="form-group">
                                    <label>Location</label><br>
                                    <input id="address_search" name="address_search" type="text" class="form-control" placeholder="Search" value="{{$room->location}}" />
                                    <input type="hidden" name="lat" id="lat"> 
                                    <input type="hidden" name="long" id="long">
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

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA9MZqWr7E-RoPcd6_lwIcGfQSTbPwSXVs&libraries=places"></script>

<script>
  google.maps.event.addDomListener(window, 'load', initialize);
    function initialize() {
      var input = document.getElementById('address_search');
      var autocomplete = new google.maps.places.Autocomplete(input);
      autocomplete.addListener('place_changed', function () {
      var place = autocomplete.getPlace();
      // place variable will have all the information you are looking for.
      $('#lat').val(place.geometry['location'].lat());
      $('#long').val(place.geometry['location'].lng());
    });
  }
</script>

@endsection