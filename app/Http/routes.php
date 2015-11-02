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

Route::get('/profile/edit', 'UserController@edit');
Route::post('/profile/set-skill-level', 'UserController@setSkillLevel');
Route::post('/profile/set-skill-love', 'UserController@setSkillLove');
Route::get('/profile/{id}', 'UserController@view');

Route::get('/login', 'UserController@login');
Route::get('/logout', 'UserController@logout');
Route::get('/auth-callback', 'UserController@auth');
