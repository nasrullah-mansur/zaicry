<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $guarded = [];

    public function photo()
    {
        return $this->belongsTo('App\Photo');
    }
    public function video()
    {
        return $this->belongsTo('App\Video');
    }
}
