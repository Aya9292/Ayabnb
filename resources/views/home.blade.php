@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="/css/home.css">
@endsection
@section('content')
<div class="container">
            <div class="row">
  <div class="col-md-7 banner">
    <h1><span class="text-red">AirPikachu</span> Book unique homes and experience a city like a local.</h1>
  </div>
</div>


<form action="/search" accept-charset="UTF-8" method="get"><input name="utf8" type="hidden" value="✓">
    <div class="row">
        <div class="col-md-6">
        <input type="text" name="search" id="autolocation" placeholder="Where are you going?" class="form-control" autocomplete="off">
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
        <div class="col-md-4">
      <div class="panel panel-default">
        <div class="panel-heading preview">
          <img src="//s3-ap-northeast-1.amazonaws.com/airpikachuue/photos/images/000/000/001/medium/R1_3.jpg?1550990941">
        </div>
        <div class="panel-body">
          <a href="/rooms/1">Avida Towers Cebu</a><br>
          $100 - Apartment - 4 beds
          <div id="star_1" title="bad"><img alt="1" src="/images/star-on.png" title="bad">&nbsp;<img alt="2" src="/images/star-off.png" title="bad">&nbsp;<img alt="3" src="/images/star-off.png" title="bad">&nbsp;<img alt="4" src="/images/star-off.png" title="bad">&nbsp;<img alt="5" src="/images/star-off.png" title="bad"><input name="score" type="hidden" value="1" readonly=""></div> 1 review
        </div>
      </div>
    </div>

    <script>
      $('#star_1').raty({
        path: '/images',
        readOnly: true,
        score: 1
      });
    </script>
    <div class="col-md-4">
      <div class="panel panel-default">
        <div class="panel-heading preview">
          <img src="//s3-ap-northeast-1.amazonaws.com/airpikachuue/photos/images/000/000/007/medium/R3_1.jpg?1550992131">
        </div>
        <div class="panel-body">
          <a href="/rooms/4">Hiro Hotel Tokyo</a><br>
          $40 - Bed &amp; Breakfast - 1 bed
          <div id="star_4" title="regular"><img alt="1" src="/images/star-on.png" title="regular">&nbsp;<img alt="2" src="/images/star-on.png" title="regular">&nbsp;<img alt="3" src="/images/star-on.png" title="regular">&nbsp;<img alt="4" src="/images/star-off.png" title="regular">&nbsp;<img alt="5" src="/images/star-off.png" title="regular"><input name="score" type="hidden" value="3" readonly=""></div> 3 reviews
        </div>
      </div>
    </div>

    <script>
      $('#star_4').raty({
        path: '/images',
        readOnly: true,
        score: 3
      });
    </script>
    <div class="col-md-4">
      <div class="panel panel-default">
        <div class="panel-heading preview">
          <img src="//s3-ap-northeast-1.amazonaws.com/airpikachuue/photos/images/000/000/035/medium/R2_1.jpg?1557023600">
        </div>
        <div class="panel-body">
          <a href="/rooms/19">Awesome guest house</a><br>
          $200 - Apartment - 1 bed
          <div id="star_19" title="gorgeous"><img alt="1" src="/images/star-on.png" title="gorgeous">&nbsp;<img alt="2" src="/images/star-on.png" title="gorgeous">&nbsp;<img alt="3" src="/images/star-on.png" title="gorgeous">&nbsp;<img alt="4" src="/images/star-on.png" title="gorgeous">&nbsp;<img alt="5" src="/images/star-on.png" title="gorgeous"><input name="score" type="hidden" value="5" readonly=""></div> 5 reviews
        </div>
      </div>
    </div>

    <script>
      $('#star_19').raty({
        path: '/images',
        readOnly: true,
        score: 5
      });
    </script>

</div>

<!-- CITIES -->
<div><h3>Cties</h3></div>
<br>

<div class="row">
  <div class="col-md-3 col-sm-12">
    <a href="#">
      <div class="discovery-card" style="background-image: url('/images/LA.jpg')"></div>
    </a>
  </div>
  <div class="col-md-3 col-sm-12">
    <a href="#">
      <div class="discovery-card" style="background-image: url('/images/LD.jpg')"></div>
    </a>
  </div>
  <div class="col-md-3 col-sm-12">
    <a href="#">
      <div class="discovery-card" style="background-image: url('/images/PR.jpg')"></div>
    </a>
  </div>
  <div class="col-md-3 col-sm-12">
    <a href="#">
      <div class="discovery-card" style="background-image: url('/images/MI.jpg')"></div>
    </a>
  </div>
</div>

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
        </div>
@endsection
