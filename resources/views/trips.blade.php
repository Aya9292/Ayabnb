@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="/css/createRoom.css">
<link rel="stylesheet" href="/css/roomMenu.css">
<link rel="stylesheet" href="/css/trips.css">

@endsection
@section('content')
<div class="container">
    <div class="row">
        @include('partials/userRoom')
        <div class="col-9">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Your Trips
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-2">
                            31-OCT-2019
                        </div>
                        <div class="col-md-2">
                            <a href="/rooms/19">
                                <img src="//s3-ap-northeast-1.amazonaws.com/airpikachuue/photos/images/000/000/035/thumb/R2_1.jpg?1557023600">
                            </a>            
                        </div>
                        <div class="col-md-5">
                            <a href="/rooms/19">Awesome guest house</a>
                            <br><br>
                            <span>
                                <img class="img-circle avatar-small" src="http://graph.facebook.com/106552017232679/picture?type=large">
                                <a href="/users/7">
                                    Tarou Yamada
                                </a>
                            </span>
                        </div>
                        <div class="col-md-3 text-right">
                            <!-- Trigger the modal with a button -->
                            <button type="button" class="btn btn-normal" data-toggle="modal" data-target="#myModal_22">
                            Review Host
                            </button>

                            <!-- Modal -->
                            <div id="myModal_22" class="modal fade" role="dialog">
                                <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">×</button>
                                    <h4 class="modal-title text-left">Review Your Host</h4>
                                </div>
                                <div class="modal-body">
                                    <form class="new_guest_review" id="new_guest_review" action="/guest_reviews" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="authenticity_token" value="jSH8s2EIlXT51VR5dcgKX+HPOxcoI4j1SApKpEpSLJjua5OEOEyIEF7f+oSriwrLc0aDbVRLU7Qjgq2cyYt7Mg==">
                                        <div class="form-group text-center">
                                        <div id="stars" style="cursor: pointer;"><img alt="1" src="/assets/star-on.png" title="bad">&nbsp;<img alt="2" src="/assets/star-off.png" title="poor">&nbsp;<img alt="3" src="/assets/star-off.png" title="regular">&nbsp;<img alt="4" src="/assets/star-off.png" title="good">&nbsp;<img alt="5" src="/assets/star-off.png" title="gorgeous"><input name="guest_review[star]" type="hidden" value="1"></div>                                        </div>
                                        <div class="form-group">
                                            <textarea rows="3" class="form-control" name="guest_review[comment]" id="guest_review_comment"></textarea>
                                        </div>

                                        <input value="19" type="hidden" name="guest_review[room_id]" id="guest_review_room_id">
                                        <input value="22" type="hidden" name="guest_review[reservation_id]" id="guest_review_reservation_id">
                                        <input value="7" type="hidden" name="guest_review[host_id]" id="guest_review_host_id">

                                        <div class="text-center">
                                            <input type="submit" name="commit" value="Add Review" class="btn btn-normal" data-disable-with="Add Review">
                                        </div>
                                    </form>      
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection