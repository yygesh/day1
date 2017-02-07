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
Route::get('welcome','WelcomeController@show');
Route::get('about','PageController@about');
Route::get('contact','PageController@contact');
Route::get('articles/', 'ArticlesController@index');
Route::get('articles/create', 'ArticlesController@create');
Route::post('store', 'ArticlesController@store');
Route::get('articles/{id}', 'ArticlesController@show');

