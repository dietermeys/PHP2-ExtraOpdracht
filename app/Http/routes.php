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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register','UsersController@getRegister');
Route::post('/register','Auth\AuthController@postRegister');

Route::get('/login','UsersController@getLogin');
Route::post('/login','Auth\AuthController@postLogin');

Route::get('/logout','Auth\AuthController@getLogout');


Route::get('/content','AddController@getContent');
Route::post('/content','AddController@postComment');

Route::get('/add','AddController@getAddContent');
Route::post('/add','AddController@postAddContent');
