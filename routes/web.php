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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'SiteController@index');
Route::get('/about', 'SiteController@about');
Route::get('/contact', 'SiteController@contact');

// Route::get('/articles','ArticlesController@index');
// Route::get('/articles/create','ArticlesController@create');
// Route::get('/articles/{id}','ArticlesController@show');
// Route::post('/articles','ArticlesController@store');
// Route::get('/articles/{id}/edit','ArticlesController@edit');
// Route::post('/articles/{id}/edit','ArticlesController@edit');

Route::resource('articles','ArticlesController');

/*用户登录注册路由*/
Route::get('login','Auth\AuthController@getLogin');
Route::post('login','Auth\AuthController@postLogin');

Route::get('register','Auth\AuthController@getRegister');
Route::post('register','Auth\AuthController@postRegister');

Route::get('logout','Auth\AuthController@getLogout');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix'=>'admin','middleware'=>'admin'],function(){
	Route::get('/users',function(){
		return 'admin only';
	});
});
