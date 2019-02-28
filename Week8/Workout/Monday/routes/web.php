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
});

Route::get('/books' , 'BookController@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// task 3 morning workout day 42
Route::get('/books/create', 'BookController@create');
Route::post('/store', 'BookController@store');

// day 42 Book project routes for CRUD
Route::get('/books/{id}/edit', 'BookController@edit');
Route::post('/books/{id}/edit', 'BookController@update');

Route::get('/books/{id}/delete', 'BookController@delete');
Route::get('/books/{id}/show', 'BookController@show');