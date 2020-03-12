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
Route::get('coba', function(){
    $details['email'] = 'ilhamalfaridzi21@gmail.com';
    dispatch(new App\Jobs\SendsMail($details));
    dd('Berhasil');
});

Route::get('/', 'HomeController@index');
Route::get('products', 'ProductController@index')->middleware('auth');
Route::get('about', 'HomeController@about');

Route::get('news', 'NewsController@index')->middleware('auth')->name('news');
Route::get('users', 'UserController@index');

Route::post('subcribe', 'NewsletterController@store');

// auth route
Route::get('/login', 'LoginController@getLogin');
Route::post('/login', 'LoginController@postLogin')->name('login');
Route::get('/register', 'LoginController@getRegister');
Route::post('/register', 'LoginController@postRegister')->name('register');
Route::get('/logout', 'LoginController@logout')->name('logout');


Route::get('auth/facebook', 'Auth\LoginController@redirectToFacebook');
Route::get('auth/facebook/callback', 'Auth\LoginController@handleFacebookCallback');
