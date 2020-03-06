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
    return view('blog.index');
});
Route::get('/about', function () {
    return view('blog.about');
});
Route::get('/news', function () {
    return view('blog.news');
});

// hanya untuk tamu yg belum auth
Route::get('/login', 'LoginController@getLogin')->middleware('guest');
Route::post('/', 'LoginController@postLogin');
Route::get('/logout', 'LoginController@logout');;

Route::get('/admin', function() {
    return view('blog.news');
})->middleware('auth:admin');

Route::get('/user', function() {
    return view('blog.index');
})->middleware('auth:usercustom');



// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');


Route::get('auth/facebook', 'Auth\LoginController@redirectToFacebook');
Route::get('auth/facebook/callback', 'Auth\LoginController@handleFacebookCallback');
