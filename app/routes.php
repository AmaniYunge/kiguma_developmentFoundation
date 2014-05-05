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
