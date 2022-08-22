<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceChild extends Model
{
    protected $guarded = [];
    protected $table = "services_child";

    public function photo()
    {
        return $this->belongsTo('App\Photo');
    }

    public function photo_two()
    {
        return $this->belongsTo('App\Photo', 'photo_id2', 'id');
    }

    public function photo_three()
    {
        return $this->belongsTo('App\Photo', 'photo_id3', 'id');
    }
}
