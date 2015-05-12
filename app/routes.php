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

Route::get('/', array('as' => 'home', function()
{
    return View::make('index') -> with(array('subtitle'=>'Home'));
}));

Route::get('staff', array('as' => 'staff', function()
{
	return View::make('staff') -> with(array('subtitle'=>'Physitians'));
}));

Route::get('services', array('as'=>'services', function()
{
	return View::make('services') -> with(array('subtitle'=>'Services'));
}));

Route::get('contact', array('as' => 'contact', function()
{
	return View::make('contact') -> with(array('subtitle'=>'Contact'));
}));

Route::get('blog', array('as' => 'blog', function()
{
	return View::make('blog') -> with(array('subtitle'=>'Blog'));
}));

Route::get('comment', array('as'=>'comment', function()
{
	return View::make('comment') -> with(array('subtitle'=>'Comment'));
}));