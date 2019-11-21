<?php
use App\Category;
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
	$data['categories']=Category::with('subcategories')->get();

    return view('frontend.index',$data);
});
	// Route::get('test/{password}',function($password){
	// 	return \Hash::make($password);
	// });
Route::get('/admin','MainController@login');
Route::post('admin/login','MainController@authenticate');	
Route::get('admin/logout','MainController@logout');

Route::group(['middleware' => ['AdminCheck'], 'prefix' => 'admin'],function(){
	//Main Category Routes
		Route::get('/dashboard','MainController@dashboard');
		 Route::get('/users', 'MainController@getusers');
		 Route::post('/userstatus/{id}','MainController@userstatus');
		Route::get('/category','CategoryController@index');		
		Route::post('/addcategory','CategoryController@addcategory');
		Route::get('/managecategory','CategoryController@managecategory');
		Route::get('/deletecategory/{id}','CategoryController@destroy');
		Route::get('/editcategory/{id}','CategoryController@edit');
		Route::post('/updatecategory','CategoryController@update');

//Subcategory Routes
		Route::get('/subcategory','SubcategoryController@index');
		Route::post('/addsubcategory','SubcategoryController@insert');
		Route::get('/managesubcategory','SubcategoryController@managesubcategory');
		Route::post('/deletesubcategory/{id}','SubcategoryController@destroy');
		Route::get('/editsubcategory/{id}','SubcategoryController@edit');
		Route::post('/updatesubcategory','SubcategoryController@update');


//Database Backup Routes
		Route::get('/database_backup','MainController@databackup');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
	//Frontend Basic Routes
	Route::get('/register','UserController@register');
	Route::post('/registration','UserController@registration');
	Route::get('/emailinfo','UserController@emailinfo');
	Route::get('/account/verify', 'UserController@verify');
	Route::get('/setpassword','UserController@setpassword');
	Route::post('/setpassword','UserController@set_password');
	Route::get('/password','UserController@password');
	Route::post('/login','UserController@userlogin');
	Route::get('/logout','UserController@logout');

