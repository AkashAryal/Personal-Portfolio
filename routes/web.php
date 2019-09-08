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
use Illuminate\Http\Request;

//The only other apperance of secKey is at KamiSamaPostsController
$SecretKey = '';
Route::view('/', 'aboutMe');
Route::view('/research', 'research');
Route::get('/projects', 'KamiSamaPostsController@dataToProjects');

Route::get('/secret/add'.'/'.$SecretKey, function(){
	return view('secret');
});

Route::get('/secret/projects'.'/'.$SecretKey, 'KamiSamaPostsController@dataToSecretProjects');

Route::get('/edit/{id}', function($id){
	//check if user can acces to this post SInce user can change id in url
		//this its fine ^
		$title=session('title');
		$picURL=session('picURL');
		$postBody=session('postBody');

	//	echo $title;
		//echo "hehe";
		Session::reflash();
	return view('edit',['id'=>$id, 'title'=>$title, 'picURL'=>$picURL, 'postBody'=>$postBody]);
})->name("edit.id");

Route::post('/delete/{id}', 'KamiSamaPostsController@delete')->name("delete.id");
Route::post('/secret/submit', 'KamiSamaPostsController@submit');
Route::post('/update/{id}','KamiSamaPostsController@update')->name('update.id');
Route::post('/updateView/{id}', 'KamiSamaPostsController@updateView')->name("updateView");
