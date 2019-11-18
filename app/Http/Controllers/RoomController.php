<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;
use App\User;

class RoomController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'home_type' =>'required',
            'room_type' =>'required',
            'accomodate' =>'required',
            'bedroom_count' =>'required',
            'bathroom_count' =>'required'
        ]);

        $home_type = $request->home_type;
        $room_type = $request->room_type;
        $accomodate = $request->accomodate;
        $bedroom_count = $request->bedroom_count;
        $bathroom_count = $request->bathroom_count;

        $room = auth()->user()->rooms()->create([
            'home_type' => $request->home_type,
            'room_type' => $request->room_type,
            'accomodate' => $request->accomodate,
            'bedroom_count' => $request->bedroom_count,
            'bathroom_count' => $request->bathroom_count
        ]);
            return redirect('/rooms/'.$room->id.'/listing');
    }

    public function create()
    {
        return view('createRoom');
    }
    public function listing($id)
    {
        $room = Room::find($id);
        return view('listing',compact('room'));
    }
    public function pricing($id)
    {
        $room = Room::find($id);
        return view('pricing',compact('room'));
    }
    public function description($id)
    {
        $room = Room::find($id);
        return view('description',compact('room'));
    }
    public function photo($id)
    {
        $room = Room::find($id);
        return view('photos',compact('room'));
    }
    public function amenities($id)
    {
        $room = Room::find($id);
        return view('amenities',compact('room'));
    }
    public function location($id)
    {
        $room = Room::find($id);
        return view('location',compact('room'));
    }
    public function roomsIndex()
    {
        $rooms = auth()->user()->rooms;
        
        return view('rooms',compact('rooms'));
    }


    public function update($id, Request $request)
    {
        $request->validate([
            'home_type' =>'required',
            'room_type' =>'required',
            'accomodate' =>'required',
            'bedroom_count' =>'required',
            'bathroom_count' =>'required'
        ]);
        $room = Room::find($id);
        $room->update([
            'home_type' => $request->home_type,
            'room_type' => $request->room_type,
            'accomodate' => $request->accomodate,
            'bedroom_count' => $request->bedroom_count,
            'bathroom_count' => $request->bathroom_count
        ]);
        return redirect('/rooms/'.$room->id.'/listing');
    }
    public function updatePrice($id, Request $request)
    {
        $request->validate([
            'price' =>'required',
    
        ]);
        $room = Room::find($id);
        $room->update([
            'price' => $request->price,
            
        ]);
        return redirect('/rooms/'.$room->id.'/pricing');
    }
    public function updateDescription($id, Request $request)
    {
        $request->validate([
            'listing_name' =>'required',
            'summary'=>'required'
    
        ]);
        $room = Room::find($id);
        $room->update([
            'listing_name' => $request->listing_name,
            'summary' => $request->summary,

            
        ]);
        return redirect('/rooms/'.$room->id.'/description');
    }
    public function updatePhoto($id, Request $request)
    {
        $request->validate([
            'photo' =>'required',
    
        ]);
        $room = Room::find($id);
        $room->update([
            'photo' => $request->photo,
            
        ]);
        return redirect('/rooms/'.$room->id.'/photo');
    }
    public function updateAmenities($id, Request $request)
    {
       
        $room = Room::find($id);
   
        $amenity = $room->amenity()->updateOrCreate (
            ['room_id' => $room->id],
            [
            'has_tv' => $request->has_tv == "on",
            'has_kitchen' => $request->has_kitchen == "on",
            'has_internet' => $request->has_internet == "on",
            'has_heating' => $request->has_heating == "on",
            'has_air_conditioning' => $request->has_air_conditioning == "on",

        ]);
        return redirect('/rooms/'.$room->id.'/amenities');
    }
    public function updateLocation($id, Request $request)
    {
        $request->validate([
            'location' =>'required',
    
        ]);
        $room = Room::find($id);
        $room->update([
            'location' => $request->location,
            
        ]);
        return redirect('/rooms/'.$room->id.'/location');
    }
    public function display($id)
    {
        $room = Room::find($id);
        
        return view('roomDetail',compact('room'));
    }
}

