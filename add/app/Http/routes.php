

<?php

/*

use App\Profile as Profile;

Route::get('/tp', function(){

        $results = Profile::all();
        return $results;
});

*/
/*useuse App\Post as PostModel;

Route::get('/posts', function(){

        $results = PostModel::all();
        return $results;
});





use App\Tarticle as Tarticle;

Route::get('/a', function(){

        $a = Tarticle::all();
        return view('AA.article')->with('a',$a);
      
});


|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/







  Route::get('a', 'ASDController@articles');

   Route::get('c', 'ASDController@comments');


   Route::get('users', 'ASDController@users');
   Route::get('profile/{id}','ASDController@profiles');

      Route::get('readerblog/{id}','ASDController@readerblogs');







   Route::get('m', 'ASDController@getM');


   Route::get('mp', 'ASDController@getMP');


//Route::auth();


Route::auth();



Route::group(['middleware' => ['web']], function () {


/*Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

*/





   Route::get('blog/{slug}',['as'=>'blog.single','uses'=>'AddController@getSingle'])
   ->where('slug','[\w\d\-\-]+');


Route::get('blog', ['as' => 'blog.index', 'uses' => 'AddController@getIndex', ]);


Route::resource('categories','CategoryController', ['except'=>['create']]);

	Route::resource('tags', 'TagController', ['except' => ['create']]);


//comments
	Route::post('comments/{post_id}',['uses'=>'CommentController@store','as'=>'comments.store']);

    Route::get('comments/{id}/edit', ['uses' => 'CommentController@edit', 'as' => 'comments.edit']);

	Route::put('comments/{id}', ['uses' => 'CommentController@update', 'as' => 'comments.update']);

	Route::delete('comments/{id}', ['uses' => 'CommentController@destroy', 'as' => 'comments.destroy']);

	Route::get('comments/{id}/delete', ['uses' => 'CommentController@delete', 'as' => 'comments.delete']);




	//end of comments







	    Route::get('contact', 'PagesController@getContact');

       Route::post('contact', 'PagesController@postContact');


	Route::get('about', 'PagesController@getAbout');
	Route::get('/', 'PagesController@getIndex');
	Route::resource('posts', 'PostController');


});










/*


 Route::resource('course','CourseController');













Route::get('form','UploadController@form');

Route::post('savedata','UploadController@save');

Route::get('edit/{id}','UploadController@edit');

Route::get('delete/{id}','UploadController@delete');


Route::post('updatedata','UploadController@update');



Route::get('/', function () {
    return view('welcome');
});


Route::get('/about', function () {
    return "this is about page";
});

Route::get('/contact', function () {
    return view('contact');
});

//Route::resource('course','CourseController');



Route::auth();
Route::get('profile','UserController@profile');

Route::post('profile','UserController@update_avator');

Route::get('/home', 'HomeController@index');


*/