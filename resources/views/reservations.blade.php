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
                Your Reservations
            </div>
             
                <div class="panel-body">
                    
                </div>
          
            </div>
        </div>
    </div>
</div>

@endsection