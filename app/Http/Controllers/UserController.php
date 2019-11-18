<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Room;
use Hash;


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
    public function update(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
        ]);
        $user = auth()->user()->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        
        return redirect('/');
    }
    
}
