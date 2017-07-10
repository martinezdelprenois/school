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

Route::post('auth/register', 'mime@register')->middleware('auth:api');
Route::post('auth/login', 'mime@login')->middleware('auth:api');
Route::group(['middleware' => 'jwt.auth'], function () {
    Route::get('user', 'mime@getAuthUser');
});

Route::get('zes', function () {
    return [1, 2, 3];
});


	
	Route::get('/', function () {
    return [1, 2, 3];
});