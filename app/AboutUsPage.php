<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AboutUsPage extends Model
{
    protected $guarded = [];

    public function photo()
    {
        return $this->belongsTo('App\Photo');
    }

    public function icon1()
    {
        return $this->belongsTo('App\Photo', 'choose_us_icon1', 'id');
    }

    public function icon2()
    {
        return $this->belongsTo('App\Photo', 'choose_us_icon2', 'id');
    }

    public function icon3()
    {
        return $this->belongsTo('App\Photo', 'choose_us_icon3', 'id');
    }
}
