<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
$SecretKey = env('UPDATE_BLOG_KEY','');
Route::get('/', function () {
    return view('home');
});
Route::get('/secret'.'/'.$SecretKey, function(){
	return view('secret');
});
