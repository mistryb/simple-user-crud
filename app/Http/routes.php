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

// WELCOME ROUTE
Route::get('/', function () {
    return view('welcome');
});

// USERS RESOURCE
Route::resource('users', 'UserController');

// API

Route::post('/createUser', ['uses' => 'UserController@createUser']);
Route::post('/updateUser', ['uses' => 'UserController@updateUser']);
Route::get('/getAllUsers', ['uses' => 'UserController@getAllUsers']);
Route::get('/getUserById', ['uses' => 'UserController@getUserById']);

