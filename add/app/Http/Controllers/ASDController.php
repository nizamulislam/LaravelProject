<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Article;
use App\Puser;
use App\Tuser;
use App\Profile;
use App\Blog;
use App\Tarticle;
use App\Tpost;
use App\Ttag;
use App\Genre;
use App\Movi;
class ASDController extends Controller
{
  

  public function articles()
  {
    $a=Tuser::all();
   return view('AA.article')->with('a',$a); 
  }



   public function comments()
   {
       $movies= Movi::all();

   return view('AA.comment')->with('movies',$movies); 
   }
















    public function users()
    {
        $tusers=Tuser::all();
        return view('userhome')->with('users',$tusers); 
    }


    public function  profiles($id)
    {
       $tusers=Tuser::find($id);

        return view('userprofile')->with('users',$tusers);
    }


    public function readerblogs($id)
    {
        $blogs=Blog::find($id);
        return view('blogdetails')->with('blogs',$blogs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getM()

    {
        $articles=Article::all();
        return view('articles.article')->withArticles($articles);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function getMP()
    {
      // $pusers = Puser::all();

         $pusers= Puser::all();
     

        return view('articles.profile')->withPusers($pusers);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
