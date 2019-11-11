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

Route::get('/', function () {
    return view('frontend.index');
});
	// Route::get('test/{password}',function($password){
	// 	return \Hash::make($password);
	// });
Route::get('/admin','MainController@login');
Route::group(['prefix'=>'admin'],function(){
		Route::post('/login','MainController@authenticate');	
		Route::get('/dashboard','MainController@dashboard');
		Route::get('logout','MainController@logout');
		Route::get('/category','CategoryController@index');		
		Route::post('/addcategory','CategoryController@addcategory');
		Route::get('/database_backup','MainController@databackup');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
