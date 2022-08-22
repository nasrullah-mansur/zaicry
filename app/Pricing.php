<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pricing extends Model
{
    protected $guarded = [];

    public function photo()
    {
        return $this->belongsTo('App\Photo');
    }

    public function pricingButton()
    {
        return $this->hasOne('App\PricingButton', 'pricing_id', 'id');
    }
}
