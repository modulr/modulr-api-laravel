<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::post('/auth/login', 'AuthController@login');
Route::post('/auth/register', 'AuthController@register');
Route::post('/password/create', 'AuthController@passwordCreate');
Route::get('/password/find/{token}', 'AuthController@passwordFind');
Route::post('/password/reset', 'AuthController@passwordReset');

Route::group(['middleware' => 'jwt.auth'], function() {
    Route::post('/auth/logout', 'AuthController@logout');
    Route::get('/auth/user', 'AuthController@getAuthUser');
});
