@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="/css/createRoom.css">
<link rel="stylesheet" href="/css/photos.css">

@endsection
@section('content')
<div class="container">
    <div class="row">
        @include('partials/roomMenu')
        <div class="col-9">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Photos
                </div>
                <div class="panel-body">
                    <div class="container">
                        <form class="edit_room" id="edit_room" action="/rooms/{{$room->id}}/photos/update" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="_method" value="patch"><input type="hidden" name="authenticity_token" value="gIIm627QjV9falGZ26ygOiXhOG480WsQbT/Voh4IZrKWXi+Zlk0rXykkFIxU28XXKNjAbnzeSyTUVr+NX86h8w==">
                        @csrf
                            <div class="row">
                                <div class="form-group">
                                    <span class="btn btn-default btn-file text-babu">
                                        <i class="fas fa-cloud-upload-alt"></i> Select Photos
                                        <input type="file" name="images[]" id="images_" multiple="multiple">
                                    </span>
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