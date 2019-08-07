<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $model;


    /**
     * Get the Videos for the blog post.
     */
    public function videos()
    {
      return $this->belongsToMany('App\Video');
    }

    public function photos(){
      return $this->belongsToMany('App\Photo');
    }
    public function albums(){
      return $this->belongsToMany('App\Album');
    }
}
