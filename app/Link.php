<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    //
    /**
    * Get the video that owns the link.
    */
    public function video()
    {
        return $this->belongsTo('App\Video');
    }

}
