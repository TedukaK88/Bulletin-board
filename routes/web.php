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

Route::group(['middleware' => ['guest']], function(){
    Route::namespace('Auth')->group(function(){
        Route::get('/login','Login\LoginController@loginView')->name('login');
        Route::get('/register','Register\RegisterController@loginView')->name('register');
        Route::post('/register/add','Register\RegisterAddedController@addRegister')->name('addRegister');
    });
});

Route::post('/login/auth','Auth\Login\LoginController@login')->name('login_auth');

Route::group(['middleware' => 'auth'], function(){
    Route::namespace('Auth')->group(function(){
        Route::get('/logout','Login\LoginController@logout')->name('logout');
        Route::post('/logout','Login\LoginController@logout')->name('logout');
    });
    Route::namespace('Admin')->group(function(){
        Route::post('/category/mainCategoryCreate','Post\PostMainCategoriesController@mainCategoryCreate')->name('mainCategoryCreate');
        Route::post('/category/subCategoryCreate','Post\PostSubCategoriesController@subCategoryCreate')->name('subCategoryCreate');
    });
    Route::namespace('User\Post')->group(function(){
        Route::get('/top','PostsController@topView')->name('top');
        Route::get('/category','PostsController@categoryView')->name('category');
        Route::get('/post','PostsController@postView')->name('post');
        Route::get('/post_detail','PostsController@post_detailView')->name('post_detail');
        Route::get('/post_edit','PostsController@post_editView')->name('post_edit');
        Route::get('/comment_edit','PostsController@comment_editView')->name('comment_edit');
    });
});


