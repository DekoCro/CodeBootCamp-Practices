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
Route::get('/categories' , 'CategoryController@index');

Route::get('/questions', 'QuestionController@index');
Route::get('/questions/{id}', 'QuestionController@show')->name('question');

Route::get('/answers/{id}', 'AnswerController@show')->name('answer');
Route::post('/answers/1', 'AnswerController@vote');

Route::get('/questions/create' , 'QuestionController@create');

Route::post('/questions', 'QuestionController@store');

