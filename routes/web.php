<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/areas', 'AreaController@index')->name('area.index');
Route::get('/area/create', 'CustomerController@create')->name('area.create');
Route::post('/areas', 'CustomerController@store')->name('area.store');
Route::post('/getAreas', 'CustomerController@getArea')->name('get.area');
Route::post('/area/update', 'CustomerController@update')->name('area.update');
Route::get('/area/destroy/{id}', 'CustomerController@destroy')->name('area.destroy');
