<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/* view作成用の仮のルーティング */

Route::get('/top', function () {
    return view('top');
});

// Route::get('/create', function () {
//     return view('create');
// });

Route::get('/edit', function () {
    return view('edit');
});

Route::get('/mypage', function () {
    return view('mypage');
});

// Route::get('/post', function () {
//     return view('post');
// });

// Route::get('/show', function () {
//     return view('posts/show');
// });

Route::get('/header', function () {
    return view('layouts/app');
});

Route::get('/commentCreate', function () {
    return view('commentCreate');
});

// 下記にコントローラーを経由したルーティングを記載して下さい
// 同じURLを指定する場合は上記に記載されたview作成ようの仮ルーティングをコメントアウトして下さい

Route::get('/post', 'PostController@index')->name('posts.index');

Route::get('/post/create', 'PostController@create')->name('posts.create');

Route::post('/post', 'PostController@store')->name('posts.store');

Route::get('/post/{id}', 'PostController@show')->name('posts.show');

Route::get('/post/{id}/edit', 'PostController@edit')->name('posts.edit');

Route::put('/post/{id}', 'PostController@update')->name('posts.update');

Route::delete('/post/{id}', 'PostController@destroy')->name('posts.destroy');

Route::get('posts/{post_id}/likes', 'LikeController@store');

Route::get('likes/{like_id}', 'LikeController@destroy');

