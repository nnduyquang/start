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


Route::get('login', 'LoginController@getLogin');
Route::post('login', 'LoginController@postLogin')->name('login');

Auth::routes();

Route::get('/admin', function () {
    return view('backend.admin.dashboard.index');
})->middleware('auth');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/{path}', 'HomeController@index')->where('path', '([A-z\d-\/_.]+)?');
