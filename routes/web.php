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


Route::get('/login', 'LoginController@index');
Route::post('/login', ['uses'=>'LoginController@verify']);
Route::get('/logout', ['uses'=>'logoutController@index']);
Route::get('/signup', ['uses'=>'SignupController@index']);
Route::get('/admin', 'AdminController@index');

Route::middleware(['sess'])->group(function()
{









});
