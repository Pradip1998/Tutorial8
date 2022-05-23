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
    return view('index');
});

Route::get('/add', function () {
    return view('add');
});
Route::get('/detail', function () {
    return view('details');
});
Route::get('/home', function () {
    return view('index');
});

Route::post('/home', 'ResourceController@create');
Route::get('/add', 'ResourceController@store');
Route::get('/remove/{id}', 'ResourceController@destroy');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
