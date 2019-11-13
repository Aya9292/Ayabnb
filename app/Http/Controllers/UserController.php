<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Room;


class UserController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        
        return view('editProfile',compact('user'));
    }
    public function profile($id)
    {
        $user = auth()->user();
        $room = Room::find($id);
        return view('userProfile',compact(['user', $room]));
    }
}
