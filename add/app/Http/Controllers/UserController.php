<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use Image;

class UserController extends Controller
{
    

    public function profile()
    {
    	return view('profile',array('user'=>Auth::user()));

       // return view('profile');
    }

    public function update_avator(Request $request)
    {
    	
    
        if($request->hasFile('avator'))
    	{
    		$avator=$request->file('avator');
    		$filename=trim(3).'.'.$avator->getclientoriginalExtension();
    		Image::make($avator)->resize(300,300)->save(public_path('/upload/avator/' .$filename));


    		$user=Auth::user();
    		$user->avator=$filename;
    		$user->save();
    	}

    	return view('profile',array('user'=>Auth::user()));

        
    }


}
