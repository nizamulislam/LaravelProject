<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table="categories";
//protected $fillable = array('name');

      public function posts()
      {
      	return $this->hasMany('App\Post');
      }


      public function tarticles()
      {
      	return $this->hasMany('App\Tarticle');
      }
  

}
