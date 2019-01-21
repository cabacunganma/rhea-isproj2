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

//Route::get('/', function () {
//    return view('welcome');
//});

//PagesController
Route::get('/', 'PagesController@index');
Route::get('/adminpage', 'PagesController@adminpage');
Route::get('/doctorpage', 'PagesController@doctorpage');
Route::get('/adminlogin', 'PagesController@adminlogin');
Route::post('/register', 'RegisterController@');

//PostsController
Route::resource('posts','PostsController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
