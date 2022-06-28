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

Route::get('/', 'QuestionController@index');
Route::post('/addQuestion', 'QuestionController@insert');
Route::get('/showQuestions','QuestionController@show');
Route::delete('deleteQuestion/{id}','QuestionController@destroy');
Route::put('/editQuestion/{id}','QuestionController@update');
