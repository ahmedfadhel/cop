<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //
    /**
     * Get the Links for the Video post.
     */
    public function videos()
    {
        return $this->belongsToMany('App\Video');
    }
    public function albums()
    {
        return $this->belongsToMany('App\Album');
    }
}
