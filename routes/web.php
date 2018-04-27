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

/*Route::get('/', function () {
    return view('welcome');
});*/

Auth::routes();
Route::get('/','PageController@index');
Route::resource('pages','PageController');
Route::resource('users','UserController',['except'=>['create','store','show']]);
Route::get('users/delete/{id}',['uses'=>'UserController@delete','as'=>'users.delete']);
