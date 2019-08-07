<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
  //
  public function categories(){
    return $this->belongsToMany('App\Category');
  }
  public function stars(){
    return $this->belongsToMany('App\Star');
  }
  public function videos(){
    return $this->belongsToMany('App\Video');
  }
  public function albums(){
    return $this->belongsToMany('App\Album');
  }
}
