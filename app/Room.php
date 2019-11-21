<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Storage;

class Room extends Model
{
    protected $guarded =[];
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function amenity()
    {
        return $this->hasOne ('App\Amenity');
    }
    public function photos()
    {
        return $this->hasMany ('App\Photo');
    }
    public function coverPhoto($dimension)
    {
        return $this->photos->count() > 0 ? Storage::disk('s3')->url($this->photos[0]->path($dimension)) : '' ;
    }
    public function isReady()
    {
        return $this->price && $this->listing_name && $this->location && $this->photos->count() > 0;
    }
}
