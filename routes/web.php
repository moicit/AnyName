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

Route::get('/', 'PagesController@index');

Route::get('/hello',function(){
    return view('pages.hello');
});

Route::get('/user/{username}/{age}',function($username,$age){
    return 'Hello '.$username . " with age  ".$age;
});

Route::resource('post','PostController');

Auth::routes();

Route::get('/home', 'PostController@index');
