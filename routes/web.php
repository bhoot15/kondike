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
//Middleware Added
Route::group(['middleware'=>['web']],function (){
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/admin-panel','HomeController@showAdminPanel');
});

//Auth::routes();


