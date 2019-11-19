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




// Route::get('create',function () {
//     dd('aaaayssd');
// });
Route::get('/','HallController@index');
Route::get('create','HallController@create');
Route::post('insert','HallController@insert');
Route::get('towns/{id}','HallController@town');
Route::get('hall/{id}','HallController@hall');