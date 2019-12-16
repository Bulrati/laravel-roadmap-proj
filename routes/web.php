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
    return view('welcome');
})->name('home');

Route::get('posts', 'PostsController@index')->name('post.index');

Route::get('posts/{id}', 'PostsController@show')->name('post.show');
Route::get('posts/{id}/edit', 'PostsController@edit')->name('post.edit');
Route::post('posts/{id}', 'PostsController@update')->name('post.update');

Route::get('/create-post', 'PostsController@create')->name('post.create');
Route::post('posts', 'PostsController@store')->name('post.store');


Route::post('posts/{id}/delete', 'PostsController@destroy')->name('post.delete');
Route::get('posts/{id}/delete', function ($id) {
    return view('posts.deletion_check', ['id' => $id]);
})->name('post.deletion_check');
