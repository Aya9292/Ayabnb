@extends('layouts.app')
@section('css')

<link rel="stylesheet" href="/css/roomDetail.css">
<link rel="stylesheet" href="/css/home.css">
<link rel="stylesheet" href="/css/filter.css">

<link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel = "stylesheet">
<script src = "https://code.jquery.com/jquery-1.10.2.js"></script>
<script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
      
@endsection
@section('content')
<div class="container">
            <!-- Image -->
    <div class="row">
        <div class="col-md-12">
            <img width="100%" src="{{$room->coverPhoto('original')}}">
        </div>
    </div>
    <br>

    <div class="row">

        <!-- LEFT PANEL -->
        <div class="col-md-8">

            <!-- Listing Name -->
            <div class="row">
                <div class="col-md-8">
                    <h1>{{$room->listing_name}}</h1>
                    {{$room->location}}
                </div>
                <div class="col-md-4 text-center">
                    <img class="img-circle avatar-large"><br><br>
                   {{$room->user->name}}
                </div>
            </div>
            <hr>

            <!-- Room Info -->
            <div class="row text-babu">
                <div class="row text-center row-space-1">
                    <div class="col-md-3">
                        <div>
                            <i class="fa fa-home fa-2x"></i>
                        </div>
                        <div>{{$room->home_type}}</div>
                    </div>
                    <div class="col-md-3">
                        <div>
                            <i class="fas fa-user fa-2x"></i>
                        </div>
                        <div>{{$room->accomodate}} Guests</div>
                    </div>

                    <div class="col-md-3">
                        <div>
                            <i class="fa fa-bed fa-2x"></i>
                        </div>
                        <div>{{$room->bedroom_count}} Bedroom</div>
                    </div>
                    <div class="col-md-3">
                        <div>
                            <i class="fa fa-bath fa-2x"></i>
                        </div>
                        <div>{{$room->bathroom_count}} Bathroom</div>
                    </div>
                </div>
            </div>
            <hr>

            <!-- About -->
            <div class="row">
                <div class="col-md-12">
                    <h3>About This Listing</h3>
                    <p>{{$room->summary}}</p>
                </div>
            </div>
            <hr>

            <!-- Amenities -->
            <div class="row">
                <div class="col-md-3">
                    <h4>Amenities</h4>
                </div>
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="amenities">
                                <li class="{{$room->amenity->has_tv ? '' : 'text-line-through'}}">TV</li>
                                <li class="{{$room->amenity->has_kitchen ? '' : 'text-line-through'}}">Kitchen</li>
                                <li class="{{$room->amenity->has_internet ? '' : 'text-line-through'}}">Internet</li>
                            </ul>                          
                        </div>
                        <div class="col-md-6">
                            <ul class="amenities">
                                <li class="{{$room->amenity->has_heating ? '' : 'text-line-through'}}">Heating</li>
                                <li class="{{$room->amenity->has_air_conditioning ? '' : 'text-line-through'}}">Air Conditioning</li>
                            </ul>                          
                        </div>
                    </div>
                </div>

            </div>

            <!-- Carousel -->
            <div class="row">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                    @foreach($room->photos as $key => $photo)
                        <div class="carousel-item {{$key == 0 ? 'active': ''}}">
                        <img class="d-block w-100" src="{{$photo->imgPath('original')}}" data-src="holder.js/900x400?theme=social" alt="First slide">
                        </div>
                    @endforeach
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <hr>

            <!-- REVIEWS -->
            <div class="row">
                <div class="col-md-12">
                    <h3>
                        1 Review
                        <span id="average_rating" title="bad"><img alt="1" src="/images/star-on.png" title="bad">&nbsp;<img alt="2" src="/images/star-off.png" title="bad">&nbsp;<img alt="3" src="/images/star-off.png" title="bad">&nbsp;<img alt="4" src="/images/star-off.png" title="bad">&nbsp;<img alt="5" src="/images/star-off.png" title="bad"><input name="score" type="hidden" value="1" readonly=""></span>
                    </h3>
                    
                    <div class="container">
                    <hr>
                        <div class="row">
                            <div class="col-md-3 text-center">
                                <img class="img-circle avatar-medium" src="/images/LA.jpg"><br><br>
                                <strong>{{$room->user->name}}</strong>
                            </div>
                            <div class="col-md-9">
                                <div id="star_10" title="bad"><img alt="1" src="/images/star-on.png" title="bad">&nbsp;<img alt="2" src="/images/star-off.png" title="bad">&nbsp;<img alt="3" src="/images/star-off.png" title="bad">&nbsp;<img alt="4" src="/images/star-off.png" title="bad">&nbsp;<img alt="5" src="/images/star-off.png" title="bad"><input name="score" type="hidden" value="1" readonly="">
                            </div>
                            <div>17-SEP-2019</div>
                        </div>
                        
                    </div>
                </div>
            </div>
                
            <br>
            <hr>

            <!-- GOOGLE MAP -->
            <div id="map"></div>
            <hr>

            <!-- NEAR BY ROOMS -->
                <div class="row">
                    <h3>Near by</h3>
                </div>
            </div>
        </div>
        <!-- RIGHT PANEL -->
        <div class="col-md-4">
            <!-- Reservation Form -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <span><i class="fa fa-bolt" style="color: #ffb400"></i> ${{$room->price}}</span>
                    <span class="pull-right">Per Night</span>
                </div>
                <div class="panel-body">
                    <form class="new_reservation" id="new_reservation" action="/rooms/{{$room->id}}/reservations" accept-charset="UTF-8" method="post">
                    @csrf
                     
                            <div class="row">   
                                <div class="col-md-6">
                                    <label>Check In</label> 
                                    <input placeholder="Start Date" class="form-control" type="text" name="start_date" id="datepicker-3">
                                </div>
                                <div class="col-md-6">
                                    <label>Check Out</label>
                                    <input placeholder="End Date" class="form-control" type="text" name="end_date" id="datepicker-4">
                                </div>
                            </div>
                        <h4 class="message-alert text-center"><span id="message"></span></h4>
                        <div id="preview" style="display: none">
                            <table class="reservation-table">
                                <tbody>
                                    <tr>
                                        <td>Price</td>
                                        <td class="text-right">$60</td>
                                    </tr>
                                    <tr>
                                        <td>Night(s)</td>
                                        <td class="text-right">x <span id="reservation_nights"></span></td>
                                    </tr>
                                    <tr>
                                        <td class="total">Total</td>
                                        <td class="text-right">$<span id="reservation_total"></span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <br>
                        <input type="submit" name="commit" value="Book Now" id="btn_book" class="btn btn-normal btn-block" disabled="disabled" data-disable-with="Book Now">
                    </form>    
                </div>
            </div>
        </div>
</div>
@endsection
@section('script')
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA9MZqWr7E-RoPcd6_lwIcGfQSTbPwSXVs"></script>
<script>

// Initialize and add the map
function initMap() {
  // The location of Uluru
  var uluru = {
                lat: {{$room->latitude}},
                lng: {{$room->longitude}}
            };
  // The map, centered at Uluru
  var map = new google.maps.Map(
      document.getElementById('map'), {zoom: 10, center: uluru});
  // The marker, positioned at Uluru
  var marker = new google.maps.Marker({position: uluru, map: map});
  var infoWindow = new google.maps.InfoWindow({
            content: "<div id='content'><img src='{{ $room->coverPhoto('thumb') }}'></div>"
        });

        infoWindow.open(map, marker);
}
google.maps.event.addDomListener(window, 'load', initMap);
</script> 
 <script>
    $(function() {
    $( "#datepicker-3" ).datepicker({
        dateFormat:"yy-mm-dd",
    });
    $( "#datepicker-4" ).datepicker({
        dateFormat:"yy-mm-dd",
    });
    });
    function checkPreview(){
        var start_date = $.datepicker.formatDate('yy-mm-dd', $('#datepicker-3').datepicker('getDate'));
        var end_date = $.datepicker.formatDate('yy-mm-dd', $('#datepicker-4').datepicker('getDate'));
        var nights = (new Date(end_date) - new Date(start_date))/1000/60/60/24 + 1; 
        var total = nights * {{ $room->price }};
        if(total){
            $('#reservation_nights').text(nights);
            $('#reservation_total').text(total);
            $('#preview').show();
            $('#btn_book').attr('disabled', false);
        }
       

    }

    $('#datepicker-3').on('change', function(){
        checkPreview()
    })

    $('#datepicker-4').on('change', function(){
        checkPreview()
    })


</script>
@endsection
