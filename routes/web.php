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