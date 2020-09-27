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
Route::get('/', array('as' => 'login', 'uses' => function(){
	    return view('welcome');
}));
Route::get('auth/twitter', 'Auth\SocialAuthController@redirectToProvider');
Route::get('auth/twitter/callback', 'Auth\SocialAuthController@handleProviderCallback');
Route::get('auth/twitter/logout', 'Auth\SocialAuthController@logout');
Route::get('twitter', 'TwitterController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
