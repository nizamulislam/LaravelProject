<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class ImageModel extends Model
{
    



    function get()
    {
    	$q=DB::table('Photo')->get();
    	return $q;
    }


    function get_row($id)
    {
    	$r=DB::table('Photo')->where('id',$id)->first();
    	return $r;
    }

    function update_row($id, $title,$image)
    {
    	$data=array(
    		'title'=>$title,
    		'image'=>$image


    		);
    	$j=DB::table("Photo")->where('id',$id)->update($data);
    	return $j;
    }




    function delete_row($id)
    {

     $d=DB::table('Photo')->where('id',$id)->delete();
     return $d;
    }







     function insert($title,$image)
     {
     	$data=array(


              'title'=>$title,
              'image'=>$image
     		);

     	$j=DB::table('Photo')->insertGetId($data);
     	return $j;
     }
}
