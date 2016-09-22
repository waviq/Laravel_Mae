<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


Route::get('/','MaeController@index');
//Route::get('auth/login','');
Route::get('home','MaeController@index');
Route::resource('data','DataController');
Route::get('quiz1', 'QuizController@getMision2Quiz1');
Route::get('quiz2', 'QuizController@getMision2Quiz2');
Route::get('quiz3', 'QuizController@getMision2Quiz3');
Route::get('quiz4', 'QuizController@getMision2Quiz4');
Route::get('quiz5', 'QuizController@getMision2Quiz5');
Route::get('quiz6', 'QuizController@getMision3Quiz6');
Route::get('quiz7', 'QuizController@getMision3Quiz7');
Route::get('quiz8', 'QuizController@getMision3Quiz8');

Route::get('rest', 'QuizController@getRestMision1');
Route::get('rest2', 'QuizController@getRestMision2');
Route::get('rest3', 'QuizController@getRestMision3');




Route::post('quiz','QuizController@postMission2');



Route::get('auth/logout','Auth\LoginController@logout');
Auth::routes();

//Route::get('/home', 'HomeController@index');
