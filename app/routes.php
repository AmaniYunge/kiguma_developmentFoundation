<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('home');
});

Route::get('about-us', function()
{
    return View::make('about_us');
});

Route::get('services', function()
{
    return View::make('services');
});

Route::get('portfolio', function()
{
    return View::make('portfolio');
});

Route::get('blog', function()
{
    return View::make('blog');
});

Route::get('contact-us', function()
{
    return View::make('contact');
});

Route::get('policy', function()
{
    return View::make('policy');
});

Route::get('reg', function()
{
    return View::make('reg');
});

Route::get('career', function()
{
    return View::make('career');
});

Route::get('terms', function()
{
    return View::make('terms');
});

Route::get('hiring', function()
{
    return View::make('hiring');
});

Route::get('donation', function()
{
    return View::make('donation');
});

/**
 * Administration Area
 * By kelvin mbwilo
 */
Route::post('user', function()
{
    $user = User::where('email',Input::get('email'))->first();
    if ($user  && $user->password == Input::get('password'))
    {
        Session::put('fname',$user->firstname." ".$user->lastname);
//        Redirect::route('adminhome');
        return View::make('layout.admin');
    }else{
        return "nope";
    }
});


Route::get('admin',array("as"=>"adminhome",function()
{
    return View::make('layout.admin');
}));


///////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////manage posts///////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////
Route::get('admin/addpost',array('as'=>'addpost',  function (){

    return View::make('admin.addpost');
}));

Route::get('admin/editpost/{id}',array('as'=>'editpost',  function ($id){
    $post = Post::find($id);
    return View::make('admin.editpost',  compact("post"));
}));

Route::get('admin/subaddcat/{id}',array('as'=>'addsubcatt',  function ($id){
    $subs = Subcategory::where("category",$id)->get();
    return Form::select('subcategory',$subs->lists('name','id'),'',array('class'=>'form-control'));
}));

Route::get('admin/managepost',array('as'=>'managepost',  function (){
    $post = Post::all();
    return View::make('admin.managepost',  compact("post"));
}));

Route::post('admin/addpost',array('as'=>'addpost1',  "uses"=>"PostController@show"));

Route::post('admin/editpost',array('as'=>'editpost1',  "uses"=>"PostController@edit"));

Route::post('admin/deletepost/{id}',  function ($id){
    $cat = Post::find($id);
    unlink(public_path().'/uploads/rooms/'.$cat->img1);
    ($cat->img2 == "")?"":unlink(public_path().'/uploads/rooms/'.$cat->img2);
    ($cat->img3 == "")?"":unlink(public_path().'/uploads/rooms/'.$cat->img3);
    $cat->delete();
});
///////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////manage categories///////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////
Route::get('admin/addcat',array('as'=>'addcat',  function (){
    return View::make('admin.addcategory');
}));

Route::get('admin/managecat',array('as'=>'managecat',  function (){
    $cats = Category::all();
    return View::make('admin.managecat',  compact("cats"));
}));

Route::get('admin/editcat/{id}',array('as'=>'editcat',  function ($id){
    $cats = Category::find($id);
    return View::make('admin.editcat',  compact("cats"));
}));

Route::post('admin/deletecat',array('as'=>'deletecat',  function (){
    $cat = Category::find($_POST['id']);
    foreach ($cat->subcategory as $value)
    {
        $value->delete();
    }
    foreach ($cat->post as $value)
    {
        $value->delete();
    }
    $cat->delete();
    $cats = Category::all();
    return View::make('admin.managecat',  compact("cats"));
}));

Route::post('admin/addcat',array('as'=>'addcat',  "uses"=>"CategoryController@store"));

Route::post('admin/editcat',array('as'=>'editcat',  "uses"=>"CategoryController@update"));


///////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////manage portifolio///////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////
Route::get('admin/addportifolio',array('as'=>'addportifolio',  function (){

    return View::make('admin.addportifolio');
}));

Route::get('admin/editportifolio/{id}',array('as'=>'editportifolio',  function ($id){
    $post = Portifolio::find($id);
    return View::make('admin.editportifolio',  compact("post"));
}));

Route::get('admin/subaddcat/{id}',array('as'=>'addsubcatt',  function ($id){
    $subs = Subcategory::where("category",$id)->get();
    return Form::select('subcategory',$subs->lists('name','id'),'',array('class'=>'form-control'));
}));

Route::get('admin/manageportifolio',array('as'=>'manageportifolio',  function (){
    $post = Portifolio::all();
    return View::make('admin.manageportifolio',  compact("post"));
}));

Route::post('admin/addportifolio',array('as'=>'addportifolio1',  "uses"=>"SubcategoryController@show"));

Route::post('admin/editportifolio',array('as'=>'editportifolio1',  "uses"=>"SubcategoryController@edit"));

Route::post('admin/deleteport/{id}',  function ($id){
    $cat = Portifolio::find($id);
    unlink(public_path().'/uploads/rooms/'.$cat->image);
    $cat->delete();
});
////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////managing images////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////
Route::get('admin/slideshow/add',array( function(){
    return View::make('admin.slideshow');
}));

Route::post('admin/slideshow/add',array("uses"=>"PostController@addslideshow"));

Route::get('admin/slideshow',array( function(){
    $post = Slideshow::orderBy("created_at","DESC")->get();
    return View::make('admin.manageslide',compact("post"));
}));

Route::post('admin/deleteslide/{id}',array( function($id){
    $slide  = Slideshow::find($id);
    unlink(public_path().'/uploads/slideshow/'.$slide->picture);
    $slide->delete();
}));

//////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////managing users///////////////////////
//////////////////////////////////////////////////////////////////////////////////////
//display a form to add user
Route::get('admin/adduser',array('as'=>'adduser',  function (){
    return View::make('admin.adduser');
}));

//display a table to manage user
Route::get('admin/manageuser',array('as'=>'manageuser',  function (){
    $user = User::all();
    return View::make('admin.manageUser',  compact('user'));
}));

//display a form to edit user
Route::get('admin/edituser/{id}',  function ($id){
    $user = User::find($id);
    return View::make('admin.edituser',  compact('user'));
});

//deleting a user
Route::post('admin/deleteuser', function (){
    $user = User::find($_POST['id']);
    $user->delete();
});

Route::post('admin/adduser',array('as'=>'adduser',  "uses"=>"UserController@store"));

Route::post('admin/updateuser',array('as'=>'edituser',  "uses"=>"UserController@update"));


Route::get('admin/addimages',array('as'=>'addimages1',  function(){

}));

Route::post('admin/addimages',array('as'=>'addimages',  "uses"=>"PostController@index"));

Route::get('admin/logout',array("as"=>"logout",function(){
    Session::forget('fname');
    Session::flush();
    return Redirect::route('homepage');
}));