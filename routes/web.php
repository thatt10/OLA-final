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
    return view('login');
});


// Login Module
Route::get('home', 'AuthController@index');
Route::get('login', 'AuthController@login'); 
Route::post('post-login', 'AuthController@postLogin'); 
Route::get('home', 'AuthController@home'); 
Route::get('registration', 'AuthController@registration');
Route::post('post-registration', 'AuthController@postRegistration'); 
Route::get('dashboard', 'AuthController@dashboard'); 
Route::get('logout', 'AuthController@logout');

// Grade & Assignment Module
Route::get('grade', 'MenuController@grade');
Route::get('monthly1', 'MenuController@monthly1');
Route::get('assignment', 'AssgController@viewAssg');
Route::get('subStore/{id}', 'AssgController@subStore')->name('subStore');
Route::post('store/{id}', 'AssgController@store')->name('store');
Route::post('edit/{id}', 'AssgController@edit')->name('edit');
Route::get('editSubmission', 'AssgController@editSubmission');
Route::get('submission', 'AssgController@submission');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
