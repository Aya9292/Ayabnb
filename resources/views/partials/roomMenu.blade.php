
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
            @if($room->photos->count())
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
            @if($room->location)
            <span class="pull-right text-babu"><i class="fa fa-check"></i></span>
            @endif
        </li>
    </ul>
    <hr>
    <form class="edit_room" id="edit_room" action="/rooms/{{$room->id}}/publish" method="post">
    @csrf
        <input value="true" type="hidden" name="active" id="room_active">
        @if($room->isReady())
        <input type="submit" name="commit" value="Publish" id="publish_button" class="btn btn-normal btn-block"  data-disable-with="Publish">        
        @else
        <input type="submit" name="commit" disabled="disabled" value="Publish" id="publish_button" class="btn btn-normal btn-block"  data-disable-with="Publish">
        @endif
    </form> 
   
</div>