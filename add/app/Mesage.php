<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mesage extends Model
{
     public function puser()
    {
    	return $this->belongsTo('App\Puser');
    }

}
