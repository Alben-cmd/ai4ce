<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventImage extends Model
{
     public function events()
    {

        return $this->belongsTo(Event::class, 'event_id');
    }
}
