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
//
//Route::prefix('printouts')->group( function () {
//  Route::get('create/{document}', 'PrintOut@create')->name('printouts.create');
//});
//
//Route::prefix('reports')->group( function () {
//  Route::get('create/{type}', 'Report@create')->name('reports.create');
//});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/details', 'HomeController@details')->name('details');
