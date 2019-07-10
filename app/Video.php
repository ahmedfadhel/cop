<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    /**
    * Get the Category that owns the Video.
    */
    public function cats()
    {
        return $this->belongsToMany('App\Category');
    }

    /**
     * Get the Parts for the Video post.
     */
    public function parts()
    {
        return $this->hasMany('App\Part');
    }

    /**
     * Get the Links for the Video post.
     */
    public function links()
    {
        return $this->hasMany('App\Link');
    }

    /**
     * Get the Stars for the Video post.
     */
    public function stars()
    {
        return $this->belongsToMany('App\Star');
    }
    /**
     * Get the Tags for the Video post.
     */
    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }
    /**
     * Get the Photos for the Video post.
     */
    public function photos()
    {
        return $this->belongsToMany('App\Photo');
    }
}
