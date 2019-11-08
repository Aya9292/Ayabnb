@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="/css/createRoom.css">
@endsection

@section('content')

    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                Create your beautiful place
            </div>
            <div class="panel-body">
                <div class="container">
                    <!-- ボタンのフォームはここだよ -->
                    
                    <form class="new_room" id="new_room" action="/room/store" method="post">
                    @csrf
                        <div class="row">
                            <div class="col-md-4 select">

                                <div class="form-group">
                                    <label>Home Type</label>
                                        <select name="home_type" id="room_home_type">
                                            <option value="Apartment">Apartment</option>
                                            <option value="House">House</option>
                                            <option value="Bed & Breakfast">Bed & Breakfast</option>
                                        </select>

                                    @if ($errors->has('home_type'))
                                    <div class="alert alert-danger" role="alert">
                                        {{ $errors->first('home_type') }}
                                    </div>
                                    @endif
                                </div>
                            </div>   

                            <div class="col-md-4 select">
                                <div class="form-group">
                                    <label>Room Type</label>
                                    <select name="room_type" id="room_type"><option value="">Select...</option>
                                        <option value="Entire">Entire</option>
                                        <option value="Private">Private</option>
                                        <option value="Shared">Shared</option>
                                    </select>

                                    @if ($errors->has('room_type'))
                                    <div class="alert alert-danger" role="alert">
                                        {{ $errors->first('room_type') }}
                                    </div>
                                    @endif
                                </div>
                            </div>  

                            <div class="col-md-4 select">
                                <div class="form-group">
                                    <label>Accommodate</label>
                                    <select name="accomodate" id="room_accommodate"><option value="">Select...</option>
                                        <option value="1" >1</option>
                                        <option value="2" >2</option>
                                        <option value="3" >3</option>
                                        <option value="4" >4+</option>
                                    </select>

                                    @if ($errors->has('accomodate'))
                                    <div class="alert alert-danger" role="alert">
                                        {{ $errors->first('accomodate') }}
                                    </div>
                                    @endif
                                </div>
                            </div>  


                            <div class="col-md-4 select">
                                <div class="form-group">
                                    <label>Bedrooms</label>
                                    <select name="bedroom_count" id="room_bed_room"><option value="">Select...</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4+</option>
                                    </select>

                                    @if ($errors->has('bedroom_count'))
                                    <div class="alert alert-danger" role="alert">
                                        {{ $errors->first('bedroom_count') }}
                                    </div>
                                    @endif
                                </div>
                            </div>  


                            <div class="col-md-4 select">
                                <div class="form-group">
                                    <label>Bathrooms</label>
                                    <select name="bathroom_count" id="room_bath_room"><option value="">Select...</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4+</option>
                                   
                                    </select>

                                    @if ($errors->has('bathroom_count'))
                                    <div class="alert alert-danger" role="alert">
                                        {{ $errors->first('bathroom_count') }}
                                    </div>
                                    @endif
                                </div>
                            </div>  
                        </div>
                        <div class="clear"></div>
                        <!-- ボタンここだよ -->
                        <div>
                            <input type="submit" name="commit" value="Create My Room" class="btn btn-normal" data-disable-with="Create My Room">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>





@endsection
