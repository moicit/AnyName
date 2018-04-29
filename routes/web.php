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

Route::resource('post','PostController');

Auth::routes();
Route::prefix('admin')->group(function(){
    Route::post('/login','Auth\AdminLoginController@login')->name('admin.login.submit');
   Route::get('/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');
   Route::get('/dashboard','AdminController@index')->name('admin.dashboard');
});

Route::get('/send',"MailController@index");
Route::get('/', 'PostController@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
