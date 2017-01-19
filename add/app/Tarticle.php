<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tarticle extends Model
{


	 protected $table = 'tarticles';
	 
    public function tuser()
    {
    	return $this->belongsTo('App\Tuser');
    }


    public function category()
    {
    	return $this->belongsTo('App\category');
    }
}
