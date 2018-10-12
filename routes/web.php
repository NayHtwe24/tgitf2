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

Route::get('/post', 'PostController@withoutEagerload')->name('post');
Route::get('/post-eagerload', 'PostController@withEagerload')->name('post-with-eagerload');
Route::get('/post-without-cache', 'PostController@withoutCaching')->name('post-without-cache');
Route::get('/post-with-cache', 'PostController@withCaching')->name('post-with-cache');

// Efficent Eloquent Queries Example
Route::get('/e/first', 'EfficientQueriesController@forFirst')->name('e:for-first');
Route::get('/e/count', 'EfficientQueriesController@forCount')->name('e:for-count');
Route::get('/e/pluck', 'EfficientQueriesController@forPluck')->name('e:for-pluck');

