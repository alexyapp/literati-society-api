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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::view('/contact', 'contact')->name('contact');
Route::get('login/facebook', 'Auth\LoginController@redirectToProvider')->name('login.facebook');
Route::get('login/facebook/callback','Auth\LoginController@handleProviderCallback');
// Route::get('login/{provider}', 'Auth\LoginController@redirectToProvider')->name('login.facebook');
// Route::get('login/{provider}/callback','Auth\LoginController@handleProviderCallback');