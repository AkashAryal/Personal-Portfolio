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
Route::get('/', 'KamiSamaPostsController@dataToHome');

Route::get('/secret'.'/'.$SecretKey, function(){
	return view('secret');
});

Route::get('/edit/{id}', function($id){
	//check if user can acces to this post SInce user can change id in url
	return view('edit');
})->name("edit.id");

Route::post('/delete/{id}', 'KamiSamaPostsController@delete')->name("delete.id");
Route::post('/secret/submit', 'KamiSamaPostsController@submit');
