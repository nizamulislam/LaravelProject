<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Course;
use DB;
use Auth;




class CourseController extends Controller
{





  public function index()
    {


      if(Auth::check())
      {
          $alldata=Course::all();

        /*$alldata=Course::where('course_title')->paginate(1);
        return $alldata;*/
      
        return View('course.index',compact('alldata'));
      }



   // return view('auth.login');

        return View('course.create'); 


      

        



        // $alldata= Course::select('course_credit')->get();
    





             // $data=Course::all();
        //$data= Course:: select('course_id')->get();
       //$data= DB::table('course')->max('course_id');
                    //$data=DB::table('course')->where('course_id', DB::raw("(select max(`course_id`) from course)"))->get();
      /* $data= find(DB::table('course')->max('course_id'));


              return view('course.index')->with('data',$data);

              */
   


    }









  /*     
    public function index()
    {
          //$alldata=Course::all();

         $alldata= Course::select('course_credit')->get();

        //$alldata=Course::where('course_title')->paginate(1);
       return $alldata;


    }

    */






    public function create()
    {
    	return view('course.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();
    	Course::create($input);

    	return redirect('course');


    }





       public function destroy($id)
    {
               
        $data = Course::findOrFail($id);
        $data->delete($data);

        return redirect('course');
    } 
    
}
