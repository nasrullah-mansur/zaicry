<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pricingarea extends Model
{
    protected $guarded = [];

    public function photo()
    {
        return $this->belongsTo('App\Photo');
    }
}
