<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{

	protected $fillable=array('title');

    public function movies() {
   return $this->belongsToMany('App\Movi','movi_genre','genre_id','movi_id');
}
}
