@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="/css/createRoom.css">
<link rel="stylesheet" href="/css/filter.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/11.1.0/nouislider.min.css" />

@endsection
@section('content')
<div>
    <div class="container-fluid">
    <div id="main" class="row">
        <div id="left" class="col-6">
    <!-- SEARCH PANEL -->
            <div class="row">
                <div class="col-md-offset-4 col-md-4">
                    <button id="filter" class="btn btn-default" data-toggle="collapse" data-target="#collapsePanel" aria-expanded="true">More filters <i class="fa fa-chevron-up"></i></button>
                </div>
            </div>
            <div class="row">
                <br>

                <div class="collapse in" id="collapsePanel" aria-expanded="true" style="">
                    <form class="room_search" id="room_search" action="/filter" accept-charset="UTF-8" data-remote="true" method="get"><input name="utf8" type="hidden" value="✓">
                       <input type="hidden" name="location" value="{{request()->query('location')}}">
                       <input type="hidden" name="lat" value="{{request()->query('lat')}}">
                       <input type="hidden" name="long" value="{{request()->query('long')}}">
                        <div class="row" id="noUiSlider">
                            <div class="col-md-8">
                                <label>Price range:</label>
                                <div id="range" class="mall-slider-handles" data-start="50" data-end="5000" data-min="50" data-max="5000" data-target="price" style="width: 100%"></div>
                            </div>
                            <div class="col-md-2">
                                <label>Min Price:</label>
                                <input class="area" type="number" name="min_price" id="min" step="5">
                            </div>
                            <div class="col-md-2">
                                <label>Max Price:</label>
                                <input class="area" type="number" name="max_price" id="max" step="5">
                            </div>
                        </div>
                        <hr>

                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" name="start_date" id="start_date" readonly="readonly" placeholder="Start Date" class="form-control datepicker hasDatepicker">
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="end_date" id="end_date" readonly="readonly" placeholder="End Date" class="form-control datepicker hasDatepicker">
                            </div>
                        </div>
                        <hr>

                        <div class="row">
                            <div class="col-md-4">
                                <input type="checkbox" name="q[room_type_eq_any][]" id="q_room_type_eq_any_" value="Entire"> Entire Room
                            </div>
                            <div class="col-md-4">
                                <input type="checkbox" name="q[room_type_eq_any][]" id="q_room_type_eq_any_" value="Private"> Private
                            </div>
                            <div class="col-md-4">
                                <input type="checkbox" name="q[room_type_eq_any][]" id="q_room_type_eq_any_" value="Shared"> Shared
                            </div>
                        </div>
                        <hr>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group select">
                                    <label>Accommodate</label>
                                    <select name="accomodate" id="accomodate">
                                        <option value="">Select...</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4+</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group select">
                                    <label>Bedrooms</label>
                                    <select name="bedroom_count" id="bedroom_count"><option value="">Select...</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4+</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group select">
                                    <label>Bathrooms</label>
                                    <select name="bathroom_count" id="bathroom_count">
                                        <option value="">Select...</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4+</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <hr>

                        <div class="row">
                            <div class="col-md-4">
                                <input type="checkbox" name="q[is_tv_eq]" id="q_is_tv_eq" value="true"> TV
                            </div>
                            <div class="col-md-4">
                                <input type="checkbox" name="q[is_kitchen_eq]" id="q_is_kitchen_eq" value="true"> Kitchen
                            </div>
                            <div class="col-md-4">
                                <input type="checkbox" name="q[is_Internet_eq]" id="q_is_Internet_eq" value="true"> Internet
                            </div>
                            <div class="col-md-4">
                                <input type="checkbox" name="q[is_heating_eq]" id="q_is_heating_eq" value="true"> Heating
                            </div>
                            <div class="col-md-4">
                                <input type="checkbox" name="q[is_air_eq]" id="q_is_air_eq" value="true"> Air Conditioning
                            </div>
                        </div>
                        <hr>

                        <div class="row text-center">
                            <input type="submit" name="commit" value="Search" class="btn btn-form mx-auto" data-disable-with="Search">
                        </div>
                    </form>
                </div>
                <br>

                @foreach($rooms as $room)
                <div class="row" id="room_listing" class="col-12 row">

                    <div class="panel panel-default d-flex mx-4 my-2">
                        <div class="panel-heading preview col-6">
                            <img src="{{$room->coverPhoto('medium')}}">
                        </div>
                        <div class="panel-body col-6">
                            <ul>
                                <li><a href="/rooms/{{$room->id}}">{{$room->listing_name}}</a></li>
                                <li>${{$room->price}} - {{$room->home_type}} - {{$room->bedroom_count}} bed</li>
                                <li><div id="star_7" title="bad"><img alt="1" src="/images/star-on.png" title="bad">&nbsp;<img alt="2" src="/images/star-off.png" title="bad">&nbsp;<img alt="3" src="/images/star-off.png" title="bad">&nbsp;<img alt="4" src="/images/star-off.png" title="bad">&nbsp;<img alt="5" src="/images/star-off.png" title="bad"><input name="score" type="hidden" value="1" readonly=""></div> 1 review</li>
                            </ul>                          
                        </div>
                    </div>
                 
                </div>
                @endforeach
                @if($rooms->count()== 0)
                <div class="col-12 row" id="room_listing">
                    <div class="col-12 my-2 panel mx-auto">
                    <h4> no data found</h4>
                    </div>
                </div>
                @endif
            </div>
        </div>
        <div id="right" class="col-6">
            <!-- GOOGLE MAP WILL BE HERE --> 
            <div id="map"></div>
        </div>
    </div>
</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/11.1.0/nouislider.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA9MZqWr7E-RoPcd6_lwIcGfQSTbPwSXVs"></script>

<script>
    $(function () {
            var $propertiesForm = $('.mall-category-filter');
            var $body = $('body');

            $body.on('click', '.js-mall-filter', function () {
                var $input = $(this).find('input');
                $(this).toggleClass('mall-filter__option--selected')
                $input.prop('checked', ! $input.prop('checked'));
                $propertiesForm.trigger('submit');
            });
            $body.on('click', '.js-mall-clear-filter', function () {
                var $parent = $(this).closest('.mall-property');

                $parent.find(':input:not([type="checkbox"])').val('');
                $parent.find('input[type="checkbox"]').prop('checked', false);
                $parent.find('.mall-filter__option--selected').removeClass('mall-filter__option--selected')

                var slider = $parent.find('.mall-slider-handles')[0]
                if (slider) {
                    slider.noUiSlider.updateOptions({
                        start: [slider.dataset.min, slider.dataset.max]
                    });
                }
                $propertiesForm.trigger('submit');
            });

            $propertiesForm.on('submit', function (e) {
                e.preventDefault();

                $.publish('mall.category.filter.start')
                $(this).request('categoryFilter::onSetFilter', {
                    loading: $.oc.stripeLoadIndicator,
                    complete: function (response) {
                        $.oc.stripeLoadIndicator.hide()
                        if (response.responseJSON.hasOwnProperty('queryString')) {
                            history.replaceState(null, '', '?' +              response.responseJSON.queryString)
                        }
                        $('[data-filter]').hide()
                        if (response.responseJSON.hasOwnProperty('filter')) {
                            for (var filter of Object.keys(response.responseJSON.filter)) {
                                $('[data-filter="' + filter + '"]').show();
                            }
                        }
                        $.publish('mall.category.filter.complete')
                    },
                    error: function () {
                        $.oc.stripeLoadIndicator.hide()
                        $.oc.flashMsg({text: 'Fehler beim Ausführen der Suche.', class: 'error'})
                        $.publish('mall.category.filter.error')
                    }
                });
            });

            $('.mall-slider-handles').each(function () {
                var el = this;
                noUiSlider.create(el, {
                    start: [el.dataset.start, el.dataset.end],
                    connect: true,
                    tooltips: true,
                    range: {
                        min: [parseFloat(el.dataset.min)],
                        max: [parseFloat(el.dataset.max)]
                    },
                }).on('change', function (values) {
                    $('[data-min="' + el.dataset.target + '"]').val(values[0])
                    $('[data-max="' + el.dataset.target + '"]').val(values[1])
                    $('#min').get(0).value = values[0]
                    $('#max').get(0).value = values[1]
    

                    $propertiesForm.trigger('submit');
                });
            })
        })
</script>
<script>
// Initialize and add the map
function initMap() {
  // The location of Uluru
  var uluru = {
                lat: {{$rooms[0]->latitude}},
                lng: {{$rooms[0]->longitude}}
            };
  // The map, centered at Uluru
  var map = new google.maps.Map(
      document.getElementById('map'), {zoom: 10, center: uluru});
  // The marker, positioned at Uluru
  var marker = new google.maps.Marker({position: uluru, map: map});
  var infoWindow = new google.maps.InfoWindow({
            content: "<div id='content'><a href='/rooms/{{$rooms[0]->id}}'>{{$rooms[0]->price}}</a></div>"
        });

        infoWindow.open(map, marker);
}
google.maps.event.addDomListener(window, 'load', initMap);
</script>

@endsection