<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{


    public function puser()
    {
    	return $this->belongsTo('App\Puser');
    }


     
}





