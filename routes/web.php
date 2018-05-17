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

Route::get('/posts/create','PostsController@create');

Route::get('/', 'PostsController@index')->name('home');

Route::post('/posts', 'PostsController@store');

Route::get('/posts/{post}', 'PostsController@show');

Route::post('/posts/{post}/comments','CommentsController@store');

Auth::routes();

//Route::get('/home', 'HomeController@index');

Route::get('/register','RegistrationController@create');
Route::post('/register','RegistrationController@store');

Route::get('/login','SessionsController@create')->name('login');
Route::get('/logout','SessionsController@destroy');

Route::post('/login_check','SessionsController@login_check');
