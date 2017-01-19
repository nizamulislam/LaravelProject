<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
  
   //protected $fillable = array('name');


   public function post()
    {
    return $this->belongsToMany('App\Post');
    }
}
