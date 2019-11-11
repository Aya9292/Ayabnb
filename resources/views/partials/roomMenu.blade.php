
<div class="col-3">
    <ul class="sidebar-list">
        <li class="sidebar-item">
            <a class="sidebar-link active" href="/rooms/{{$room->id}}/listing">Listing</a>
            @if($room->home_type && $room->room_type && $room->accomodate && $room->bedroom_count && $room->bathroom_count)
            <span class="pull-right text-babu"><i class="fa fa-check"></i> 
            @endif
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link active" href="/rooms/{{$room->id}}/pricing">Pricing</a>
            @if($room->price)
            <span class="pull-right text-babu"><i class="fa fa-check"></i></span>
            @endif
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link active" href="/rooms/{{$room->id}}/description">Description</a>
            @if($room->listing_name && $room->summary)
            <span class="pull-right text-babu"><i class="fa fa-check"></i></span>
            @endif
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link active" href="/rooms/{{$room->id}}/photo">Photos</a>
            @if($room->photos)
            <span class="pull-right text-babu"><i class="fa fa-check"></i></span>
            @endif
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link active" href="/rooms/{{$room->id}}/amenities">Amenities</a>
            @if($room->amenity)
            <span class="pull-right text-babu"><i class="fa fa-check"></i></span>
            @endif
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link active" href="/rooms/{{$room->id}}/location">Location</a>
            @if($room->latitude && $room->longtitude)
            <span class="pull-right text-babu"><i class="fa fa-check"></i></span>
            @endif
        </li>
    </ul>
    <hr>    
    <form class="edit_room" id="edit_room" action="/rooms/{{$room->id}}" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="_method" value="patch"><input type="hidden" name="authenticity_token" value="8DXalX4BiumQsAyzBgJtiml2sXCrKprufS4qk7SbOMfm6dPnhpws6eb+SaaJdQhnZE9JcOslutrER0C89V3/hg==">
        <input value="true" type="hidden" name="active" id="room_active">
        <input type="submit" name="commit" value="Publish" id="publish_button" class="btn btn-normal btn-block" disabled="disabled" data-disable-with="Publish">
    </form> 
</div>