<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/what-we-do', function(){
	return view('WhatWeDo');
});

Route::get('/what-we-have-done', function(){
	return view('portfolio');
});

Route::get('/talk-to-us', function(){
	return view('contact');
});
