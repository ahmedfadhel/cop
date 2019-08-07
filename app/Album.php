<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    // Photos Relation with albums
    public function photos()
    {
      # code...
      return $this->belongsToMany('App\Photo');
    }
    public function cats()
    {
      # code...
      return $this->belongsToMany('App\Category');
    }
    public function tags()
    {
      # code...
      return $this->belongsToMany('App\Tag');
    }
}
