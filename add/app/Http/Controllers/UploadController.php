<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Image;
use Redirect;
use App\ImageModel;

class UploadController extends Controller
{
    public function index()
    {

    }

    public function form()
    {
    	 $m = new ImageModel;
    	 $data=$m->get();
    	return view('upload.form')->with('data',$data);
    }




   
   public function save(Request $request)
    {
        
        $m = new ImageModel;

       $post=$request->all();
       //var_dump($post);

       $this->validate($request,[

       'title'=>'required',
       'image'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

       	]);
       $image=$request->file('image');
       $realname=$image->getClientOriginalName();

       $input=md5($realname).trim(2).'.'.$image->getClientOriginalExtension();
       $destinationPath=public_path('/upload/thumb/');

       $img=Image::make($image->getRealPath());


       $img->resize(100,100,function($constraint){
       	  $constraint->aspectRatio();

       })->save($destinationPath.'/'.$input);
       $destinationPath=public_path('/upload/');
       $image->move($destinationPath,$input);



       $i=$m->insert($post['title'],$input);
         if($i>0)
         {
         	 \Session::flash('success','upload successfully');
         	 return Redirect::to('form');
         }
    }











   public function edit($id)
   {
   	 $m=new ImageModel;
   	 $row=$m->get_row($id);

   	 	return view('upload.edit')->with('row',$row);

   }







   public function update(Request $request)
   {

        $m = new ImageModel;

       $post=$request->all();

       $oldpic=$post['oldpic'];
       $title=$post['title'];
       $id=$post['id'];


       $newpic='';
       $image=$request->file('image');


       if(empty($image))
       {
       	 $newpic=$oldpic;
       }

       else

       {
       	  \File::Delete('upload/'.$oldpic,'upload/thumb/'.$oldpic);


            
             $realname=$image->getClientOriginalName();

       $input=md5($realname).trim(2).'.'.$image->getClientOriginalExtension();
       $destinationPath=public_path('/upload/thumb/');

       $img=Image::make($image->getRealPath());


       $img->resize(100,100,function($constraint){
       	  $constraint->aspectRatio();

       })->save($destinationPath.'/'.$input);
       $destinationPath=public_path('/upload/');
       $image->move($destinationPath,$input);


       $newpic=$input;





       $i=$m->update_row($id,$title,$newpic);
         if($i)
         {
         	 \Session::flash('success','update successfully');
         	 return Redirect::to('form');
         }


       }
       //var_dump($post);
   }




   public function delete($id)
   {
   	$m=new ImageModel;

   	$g=$m->get_row($id);

   	\File::Delete('upload/'.$g->image,'upload/thumb/'.$g->image);

   	$i=$m->delete_row($id);

   	  if($i)
   	  {
   	  	 \Session::flash('deletemsg','delete successfully');
         	 return Redirect::to('form');
   	  }
   }











    
}
