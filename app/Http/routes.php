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

Route::get('/profile/{id}', 'UserController@profile');
Route::get('/login', 'UserController@login');
Route::get('/logout', 'UserController@logout');
Route::get('/auth-callback', 'UserController@auth');
