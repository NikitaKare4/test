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
   return view('layouts');
});

// Подробнее
Route::get('book/select/{id}', 'BookController@getSelect');
Route::get('book/index', 'BookController@getIndex');
// Добавить
Route::get('book/add', 'BookController@getAdd');
Route::post('book/add', 'BookController@postAdd');
// Поиск
Route::get('/search', 'SearchController@getResults')->name('search.results');



