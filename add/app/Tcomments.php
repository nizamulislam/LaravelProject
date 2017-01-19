<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tcomments extends Model
{
     public function tusers()
     {
     	return $thsi->belongsToMany('App\Tuser');
     }
}
