@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="/css/createRoom.css">
<link rel="stylesheet" href="/css/roomMenu.css">

@endsection
@section('content')
<div class="container">
    <div class="row">
        @include('partials/roomMenu')
        <div class="col-9">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Create your beautiful place
                </div>
                <div class="panel-body">
                    <div class="container">
                        <!-- ボタンのフォームはここだよ -->
                        
                        <form class="new_room" id="new_room" action="/room/{{$room->id}}/listing/update" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="authenticity_token" value="GtbbgGAMVnlM20KMEB/nOtkitsM5PhSwXOzMHcwIPwIMCtLymJHweTqVB5mfaILX1BtOw3kxNITlhaYyjc74Qw==">
                        @csrf
                            <div class="row">
                                <div class="col-md-4 select">
                                    <div class="form-group">
                                        <label>Home Type</label>
                                        <select name="home_type" id="room_home_type">
                                            <option value="Apartment" {{$room->home_type  == 'Apartment' ?  'selected' : ''}}>Apartment</option>
                                            <option value="House" {{$room->home_type  == 'House' ?  'selected' : ''}}>House</option>
                                            <option value="Bed & Breakfast" {{$room->home_type  == 'Bed & Breakfast' ?  'selected' : ''}}>Bed &amp; Breakfast</option>
                                        </select>
                                    </div>
                                </div>   

                                <div class="col-md-4 select">
                                    <div class="form-group">
                                        <label>Room Type</label>
                                        <select name="room_type" id="room_room_type" value="{{$room->room_type}}">
                                            <option value="Entire"  {{$room->room_type  == 'Entire' ?  'selected' : ''}}>Entire</option>
                                            <option value="Private" {{$room->room_type  == 'Private' ?  'selected' : ''}}>Private</option>
                                            <option value="Shared"  {{$room->room_type  == 'Shared' ?  'selected' : ''}}>hared</option>
                                        </select>
                                    </div>
                                </div>  

                                <div class="col-md-4 select">
                                    <div class="form-group">
                                        <label>Accommodate</label>
                                        <select name="accomodate" id="room_accommodate" value="{{$room->accomodate}}">
                                            <option value="1" {{$room->accomodate  == '1' ?  'selected' : ''}}>1</option>
                                            <option value="2" {{$room->accomodate  == '2' ?  'selected' : ''}}>2</option>
                                            <option value="3" {{$room->accomodate  == '3' ?  'selected' : ''}}>3</option>
                                            <option value="4" {{$room->accomodate  == '4+' ?  'selected' : ''}}>4+</option>
                                        </select>
                                    </div>
                                </div>  


                                <div class="col-md-4 select">
                                    <div class="form-group">
                                        <label>Bedrooms</label>
                                        <select name="bedroom_count" id="room_bed_room" value="{{$room->bedroom_count}}">
                                            <option value="1" {{$room->bedroom_count  == '1' ?  'selected' : ''}}>1</option>
                                            <option value="2" {{$room->bedroom_count  == '2' ?  'selected' : ''}}>2</option>
                                            <option value="3" {{$room->bedroom_count  == '3' ?  'selected' : ''}}>3</option>
                                            <option value="4" {{$room->bedroom_count  == '4+' ?  'selected' : ''}}>4+</option>
                                        </select>
                                    </div>
                                </div>  


                                <div class="col-md-4 select">
                                    <div class="form-group">
                                        <label>Bathrooms</label>
                                        <select name="bathroom_count" id="room_bath_room" value="{{$room->bathroom_count}}">
                                            <option value="1" {{$room->bathroom_count  == '1' ?  'selected' : ''}}>1</option>
                                            <option value="2" {{$room->bathroom_count  == '2' ?  'selected' : ''}}>2</option>
                                            <option value="3" {{$room->bathroom_count  == '3' ?  'selected' : ''}}>3</option>
                                            <option value="4" {{$room->bathroom_count  == '4+' ?  'selected' : ''}}>4+</option>
                                        </select>
                                    </div>
                                </div>  
                            </div>
                            <div class="clear"></div>
                            <!-- ボタンここだよ -->
                            <div>
                                <input type="submit" name="commit" value="Saved" class="btn btn-normal" data-disable-with="Create My Room">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection