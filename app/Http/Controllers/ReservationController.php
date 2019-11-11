<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;
use App\User;

class ReservationController extends Controller
{
    public function reservationsIndex()
    {
        return view('reservations');
    }
    public function tripsIndex()
    {
        return view('trips');
    }
}
