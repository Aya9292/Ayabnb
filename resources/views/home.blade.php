@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="/css/home.css">
@endsection
@section('content')
<div class="container">
            <div class="row">
  <div class="col-md-7 banner">
    <h1><span class="text-red">Ayabnb</span> Book unique homes and experience a city like a local.</h1>
  </div>
</div>


<form action="/filter" accept-charset="UTF-8" method="get"><input name="utf8" type="hidden" value="✓">
    <div class="row">
        <div class="col-md-6">
          <input type="text" name="location" id="search_address" placeholder="Where are you going?" class="form-control" autocomplete="off">
          <input type="hidden" name="lat">
          <input type="hidden" name="long">  
        </div>
        <div class="col-md-3">
        <input type="text" name="start_date" id="start_date" placeholder="Start Date" class="form-control datepicker hasDatepicker">
        </div>
        <div class="col-md-3">
        <input type="text" name="end_date" id="end_date" placeholder="End Date" class="form-control datepicker hasDatepicker">
        </div>
    </div>
    <br><br>

    <div class="row">
        <div class="col-md-offset-4 col-md-4">
            <input type="submit" name="commit" value="Search" class="btn btn-normal btn-block" data-disable-with="Search">
        </div>
    </div>
</form>


<br><hr><br>

<!-- HOMES -->
<div><h3>Homes</h3></div>
<br>

<div class="row">
  @foreach($rooms as $room)
    <div class="col-md-4">
      <div class="panel panel-default">
        <div class="panel-heading preview">
          <img src="{{$room->coverPhoto('medium')}}">
        </div>
        <div class="panel-body">
          <a href="/rooms/{{$room->id}}">{{$room->listing_name}}</a><br>
          ${{$room->price}} - {{$room->house_type}} - {{$room->bedroom_count}} beds
          <div id="star_1" title="bad"><img alt="1" src="/images/star-on.png" title="bad">&nbsp;<img alt="2" src="/images/star-off.png" title="bad">&nbsp;<img alt="3" src="/images/star-off.png" title="bad">&nbsp;<img alt="4" src="/images/star-off.png" title="bad">&nbsp;<img alt="5" src="/images/star-off.png" title="bad"><input name="score" type="hidden" value="1" readonly=""></div> 1 review
        </div>
      </div>
    </div>
    @endforeach
</div>

<!-- CITIES -->
<div><h3>Cties</h3></div>
<br>

<div class="row">
  <div class="col-md-3 col-sm-12">
    <a href="/filter">
      <div class="discovery-card" style="background-image: url('/images/LA.jpg')"></div>
    </a>
  </div>
  <div class="col-md-3 col-sm-12">
    <a href="/filter">
      <div class="discovery-card" style="background-image: url('/images/LD.jpg')"></div>
    </a>
  </div>
  <div class="col-md-3 col-sm-12">
    <a href="/filter">
      <div class="discovery-card" style="background-image: url('/images/PR.jpg')"></div>
    </a>
  </div>
  <div class="col-md-3 col-sm-12">
    <a href="/filter">
      <div class="discovery-card" style="background-image: url('/images/MI.jpg')"></div>
    </a>
  </div>
</div>
@endsection
@section('script')
<script>
    $('#start_date').datepicker({
        dateFormat: 'dd-mm-yy',
        minDate: 0,
        maxDate: '3m',
        onSelect: function(selected) {
            $('#end_date').datepicker("option", "minDate", selected);
            $('#end_date').attr("disabled", false);
        }
    });

    $('#end_date').datepicker({
        dateFormat: 'dd-mm-yy',
        minDate: 0,
        maxDate: '3m',
        onSelect: function(selected) {
            $('#start_date').datepicker("option", "maxDate", selected);
        }
    });

    $(function(){
      $("#autolocation").geocomplete();
    })
</script>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

<script>
  google.maps.event.addDomListener(window, 'load', initialize);
    function initialize() {
      var input = document.getElementById('search_address');
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
