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

// auth route
// Route::get('/login', 'LoginController@getLogin');
Route::post('/login', 'LoginController@postLogin')->name('login');
// Route::get('/register', 'LoginController@getLogin');
Route::post('/register', 'LoginController@postRegister')->name('register');
// Route::get('/logout', 'LoginController@logout');



// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');


Route::get('auth/facebook', 'Auth\LoginController@redirectToFacebook');
Route::get('auth/facebook/callback', 'Auth\LoginController@handleFacebookCallback');
