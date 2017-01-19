<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Tuser extends Model
{
    protected $table="tusers";
    protected $fillable=array('name','email');



      public function tcomments()
      {
        return $this->belongsToMany('App\Tcomments');
      }


      public function tposts()
      {
        return $this->hasMany('App\Tpost');
      }




    public function getProfile()
    {
    	return $this->hasOne('App\Profile','userid');
    }


    public function getWritten()
    {
    	return $this->hasMany('App\Blog','writerid');
    }


    public function getRead()
    {
    	return $this->belongsToMany('App\Blog','blogreaders','readerid','blogid');
    }





   public function tarticles()
   {
    return $this->hasMany('App\Tarticle');
   }



}
