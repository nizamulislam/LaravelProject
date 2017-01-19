<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table='blogs';
    protected $fillable=array('writerid','title','content');


        public function getAuthor()
    {
    	return $this->belongsTo('App\Tuser','writerid');
    }


    public function getReader()
    {
    	return $this->belongsToMany('App\Tuser','blogreaders','blogid','readerid');
    }
}
