<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;
use App\User;
use Carbon\carbon;
use Auth;

class ReservationController extends Controller
{
    public function reservationsIndex()
    {
        return view('reservations');
    }
    public function tripsIndex()
    {
        $trips = Auth::user()->reservations;
        return view('trips', compact('trips'));
    }
    public function store($id, Request $request){
        $start_date = Carbon::createFromFormat('Y-m-d', $request->start_date);
        $end_date = Carbon::createFromFormat('Y-m-d', $request->end_date);
        $days =  $end_date->diffInDays($start_date) - 1;
        $room = Room::find($id);
        $reservations = auth()->user()->reservations()->create([
            'room_id' => $id,
            'first_date' => $request->start_date,
            'last_date' => $request->end_date,
            'total_price' => $days*$room->price
           
        ]);
            return redirect('/trips');
    }
}
