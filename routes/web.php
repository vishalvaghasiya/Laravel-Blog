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

/*Route::get('/', function () {
    return view('welcome');
});*/



Route::get('/' , 'PagesController@index');
Route::get('/service' , 'PagesController@service');
Route::get('/about', 'PagesController@about');

//Route::get('posts', 'PostsController');   not Properly work Error full
Route::resource('posts','PostsController');
