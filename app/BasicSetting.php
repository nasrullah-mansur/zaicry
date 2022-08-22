<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BasicSetting extends Model
{
    protected $guarded = [];

    public function photo()
    {
        return $this->belongsTo('App\Photo');
    }
}
