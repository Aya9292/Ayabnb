@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="/css/createRoom.css">
<link rel="stylesheet" href="/css/amenities.css">
<link rel="stylesheet" href="/css/roomMenu.css">

@endsection
@section('content')
<div class="container">
    <div class="row">
        @include('partials/roomMenu')
        <div class="col-9">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Amenities
                </div>
                <div class="panel-body">
                    <div class="container">
                        <form class="edit_room" id="edit_room" action="/rooms/{{$room->id}}/amenities/update" method="post">
                        @csrf
                        
                            <div class="row form-group">
                                <div class="col-md-4">
                                    @if($room->amenity)
                                    <input type="checkbox"  {{$room->amenity->has_tv == 1 ? 'checked' : ''}} name="has_tv" id="room_has_tv"> TV
                                    @else
                                    <input type="checkbox"> TV
                                    @endif
                                </div>
                                
                                <div class="col-md-4">
                                    @if($room->amenity)
                                    <input type="checkbox"  {{$room->amenity->has_kitchen == 1 ? 'checked' : ''}} name="has_kitchen" id="room_has_kitchen"> Kitchen
                                    @else
                                    <input type="checkbox"> Kitchen
                                    @endif
                                </div>

                                <div class="col-md-4">
                                    @if($room->amenity)
                                    <input type="checkbox" {{$room->amenity->has_internet == 1 ? 'checked' : ''}} name="has_internet" id="room_has_internet"> Internet
                                    @else
                                    <input type="checkbox"> Internet
                                    @endif
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-md-4">
                                    @if($room->amenity)
                                    <input type="checkbox" {{$room->amenity->has_heating == 1 ? 'checked' : ''}} name="has_heating" id="room_has_heating"> Heating
                                    @else
                                    <input type="checkbox"> Heating
                                    @endif
                                </div>

                                <div class="col-md-4">
                                    @if($room->amenity)
                                    <input type="checkbox" {{$room->amenity->has_air_conditioning == 1 ? 'checked' : ''}} name="has_air_conditioning" id="room_has_air_conditioning_"> Air Conditioning
                                    @else
                                    <input type="checkbox"> Air Conditioning
                                    @endif
                                </div>
                            </div>
                            <br><br>

                            <div class="text-center">
                                <input type="submit" name="commit" value="Save" class="btn btn-form" data-dhasable-with="Save">
                            </div>
                        </form>                
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection