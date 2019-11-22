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
        $file = $request->file('images');
        $filename = $file->getClientOriginalName();
        $room = Room::find($id);

        $photo = $room->photos()->create(['photo' => $filename]);

        $photo->resizeAndSavePhoto($file);

        return redirect('/rooms/'.$room->id.'/photo');
    }
}
