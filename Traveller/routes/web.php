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
    return view('layouts/top');
});

Route::get('/create', function () {
    return view('layouts/create');
});

Route::get('/edit', function () {
    return view('layouts/edit');
});

Route::get('/mypage', function () {
    return view('layouts/mypage');
});

Route::get('/post', function () {
    return view('layouts/post');
});

Route::get('/show', function () {
    return view('layouts/show');
});