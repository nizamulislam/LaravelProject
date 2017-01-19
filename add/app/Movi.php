<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movi extends Model
{
   protected $primaryKey = 'genre_id';
   protected $fillable=array('name');

   public function genres() 
     {
    return $this->belongsToMany('App\Genre','movi_genre', 'movi_id', 'genre_id');
     }
}
