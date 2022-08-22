<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chooseus extends Model
{
    protected $guarded = [];

    public function photo()
    {
        return $this->belongsTo('App\Photo');
    }

    public function chooseusExperience()
    {
        return $this->belongsTo('App\ChooseusExperience', 'chooseus_experience_id');
    }
}
