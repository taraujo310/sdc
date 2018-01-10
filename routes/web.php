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

Route::get('/', 'PagesController@index')->name('root');
Route::get('/about', 'EventsController@index')->name('about');

Route::get('/news', 'NewsController@index')->name('news');
Route::get('/news/{id}', 'NewsController@show')->where('id', '[0-9]+');
Route::get('/news/new', 'NewsController@new');
Route::post('/news', 'NewsController@create');
Route::delete('/news/{id}', 'NewsController@destroy')->where('id', '[0-9]+')->name('news.destroy');
Route::get('/news/{id}/edit', 'NewsController@edit')->where('id', '[0-9]+')->name('news.edit');
Route::post('/news/{id}/update', 'NewsController@update')->name('news.update');

Route::get('/events/{id}', 'EventsController@show')->where('id', '[0-9]+');
