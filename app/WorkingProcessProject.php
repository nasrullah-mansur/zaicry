<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WorkingProcessProject extends Model
{
    protected $guarded = [];

    public function photo()
    {
        return $this->belongsTo('App\Photo');
    }
}
