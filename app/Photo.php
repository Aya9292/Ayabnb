<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Image;
use Storage;

class Photo extends Model
{
    protected $guarded =[];
    protected $dimensions = [
        'original' => null,
        'medium'   => 300,
        'thumb'    => 100
    ];

    public function room()
    {
        return $this->belongsTo('App\Room');
    }

    public function resizeAndSavePhoto($file)
    {
        $image = Image::make($file);

        foreach($this->dimensions as $dimension => $width)
        {
            if($width){
                $image->resize($width, null, function($constraint){
                    $constraint->aspectRatio();
                    $constraint->upsize();
                });
            }
        }
        Storage::disk('s3')->put("photos/{$this->id}/{$dimension}/{$this->photo}", $image->encode(), 'public');
    }
    public function path($dimension)
    {
        return "photos/{$this->id}/{$dimension}/{$this->photo}";
    }
}
