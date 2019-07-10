<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Star extends Model
{
    //
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'star_id'
    ];

    /**
     * Get the Video for the Star.
     */
    public function videos()
    {
      return $this->belongsToMany('App\Video');
    }
    public function photos()
    {
      return $this->belongsToMany('App\Photo');
    }
}
