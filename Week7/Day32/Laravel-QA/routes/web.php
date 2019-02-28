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

Route::get('/questions' , 'QuestionController@index');
Route::get('/questions/{id}' , 'QuestionController@show')->name('question.id');
Route::get('/categories' , 'CategoryController@index');
//Task 9. morning workout day 35
Route::get('/answers/{id}' , 'AnswerController@show')->name('answer.id');
//Task 15. morning workout day 35
Route::post('/answers/1' , 'AnswerController@vote');

Route::get('/questions/create' , 'QuestionController@create')->name('question.create');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/questions/{id}' , 'AnswerController@store')->name('answer.store')->middleware('auth');;
