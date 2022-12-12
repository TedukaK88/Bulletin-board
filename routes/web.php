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
    return view('auth.login');
});

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/login','Auth\Login\LoginController@loginView')->name('login');
Route::get('/register','Auth\Register\RegisterController@loginView')->name('register');
Route::post('/register/add','Auth\Register\RegisterAddedController@addRegister')->name('addRegister');

Route::post('/top','User\Post\PostsController@topView')->name('p_top');
Route::get('/top','User\Post\PostsController@topView')->name('top');
Route::get('/category','User\Post\PostsController@categoryView')->name('category');
Route::get('/post','User\Post\PostsController@postView')->name('post');
Route::get('/post_detail','User\Post\PostsController@post_detailView')->name('post_detail');
Route::get('/post_edit','User\Post\PostsController@post_editView')->name('post_edit');
Route::get('/comment_edit','User\Post\PostsController@comment_editView')->name('comment_edit');
