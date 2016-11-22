<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'HomeController@index');
Route::get('About', 'AboutController@index');
Route::get('AboutBook', 'AboutBookController@index');
Route::get('Index', 'IndexController@index');
Route::get('Chapter', 'ChapterController@index');
Route::get('Approval', 'ApprovalController@index');
Route::get('Login', 'LoginController@index');
Route::get('Signup', 'SignupController@index');

Route::resource('chapters', 'ChaptersController');

