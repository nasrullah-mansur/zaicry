<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    protected $guarded = [];

    public function photo()
    {
        return $this->belongsTo('App\Photo');
    }

    public function photo2()
    {
        return $this->belongsTo('App\Photo', 'photo_id2', 'id');
    }
}
