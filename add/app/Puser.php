<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Puser extends Model
{
    public function articles()
    {
    	return $this->hasMany('App\Article');
    }



    public function mesages()
    {
    	return $this->hasMany('App\Mesage');
    }

    


    

  

}
