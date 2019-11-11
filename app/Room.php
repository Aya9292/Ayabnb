<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
}