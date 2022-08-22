<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobsFacility extends Model
{
    protected $guarded = [];

    public function photo()
    {
        return $this->belongsTo('App\Photo');
    }
}
