<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;
use Session;
use App\Category;
use App\tag;
use Image;
use Storage;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('id','desc')->paginate(5);
        return view('posts.index')->withPosts($posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

   $categories = Category::all();
        $tags = Tag::all();
        return view('posts.create')->withCategories($categories)->withTags($tags);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         //dd($request);  

             $this->validate($request,[
        'title'=>'required',
        'slug'=>'required',
        'category_id'=>'required|integer',
        'body'=>'required',
        'featured_img'=>'required|sometimes|image'
        
    ]);





        // store in the database
        $post = new Post;

        $post->title = $request->title;
        $post->slug = $request->slug;
         $post->category_id = $request->category_id;
        $post->body = $request->body;


       /// save our image

      if ($request->hasFile('featured_img')) {

           $image = $request->file('featured_img'); //Image show korta $image variable use korta hobe
          $filename = time() . '.' . $image->getClientOriginalExtension();
          $location = public_path('images/' . $filename);
          Image::make($image)->resize(800, 400)->save($location);

          $post->image = $filename;
        }




    ///end of image save










        $post->save();


    //  $post->tags()->attach($request->input('name'));

      $post->tags()->attach($request->input('tags'));


      // $post->tags()->sync($request->tags, false);

       Session::flash('success', 'The blog post was successfully save!');
       // Session::flash('alert-class', 'alert-danger'); 
   

        return redirect()->route('posts.show', $post->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
          
         $post = Post::find($id);
        return view('posts.show')->withPost($post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post=Post::find($id);
        $categories=category::all();

        $cats=array();
          foreach($categories as $category )
          {
            $cats[$category->id]=$category->name;
          }


      $tags=Tag::all();
      $tags2=array();
       foreach($tags as $tag)
       {
         $tags2[$tag->id]=$tag->name;
       }


        return view('posts.edit')->withPost($post)->withCategories($cats)->withTags($tags2);
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
        
             $this->validate($request,[
        'title'=>'required',
        'slug'=>"required|alpha_dash|min:5|max:255|unique:posts,slug,$id",
        'category_id'=>'required|integer',
        'body'=>'required',
        'featured_img'=>'image'
      ]);



  // store in the database
         $post=Post::find($id);

        $post->title = $request->input('title');
         $post->slug = $request->input('slug');
         $post->category_id=$request->input('category_id');
        $post->body = $request->input('body');







       /// save our image

      if ($request->hasFile('featured_img')) {

           $image = $request->file('featured_img'); //Image show korta $image variable use korta hobe
          $filename = time() . '.' . $image->getClientOriginalExtension();
          $location = public_path('images/' . $filename);
          Image::make($image)->resize(800, 400)->save($location);
          //update image change
          $old=$post->image;

          $post->image = $filename;

          Storage::delete($old);


          //end of image change
        }




    ///end of image save




        $post->save(); 

       

   if (isset($request->tags)) {
            //$post->tags()->sync($request->tags);
           $post->tags()->attach($request->input('tags'));


         // $post->tags()>sync( (array) $request->tags );
        } 

        else {
            $post->tags()->sync(array());
           // $post->tags()->sync(['1']);
        }


        

       Session::flash('success', 'The blog post was successfully updated!');
       // Session::flash('alert-class', 'alert-danger'); 
   

        return redirect()->route('posts.show', $post->id);



        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $post = Post::find($id);
         $post->tags()->detach();

         Storage::delete($post->image);
         $post->delete();


      Session::flash('success', 'The post was successfully deleted.');
        return redirect()->route('posts.index');
    }
}
