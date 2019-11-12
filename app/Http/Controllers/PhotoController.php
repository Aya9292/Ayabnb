<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;
use App\Room;
use Response;

class PhotoController extends Controller
{
    public function store($id, Request $request)
    {
        $request->validate(['images' => 'required']);
        $file = $request->file('images');
        return $file;
        $filename = $file->getClientOriginalName();
        $room = Room::find($id);
        $photo = $room->photos()->create(['photo' => $filename]);
        $photo->resizeAndSavePhoto($file);

    return redirect('/rooms/'.$room->id.'/photo');

    }
}
