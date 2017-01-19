<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table="profiles";
    protected $fillable=array('userid','about');

    public function getUser()
    {
    	return $this->belongsTo('App\Tuser','userid');
    }
}
