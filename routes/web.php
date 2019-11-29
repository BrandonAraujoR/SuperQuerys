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
})->name('home');

Route::get('/dd','XMLController@xml')->name('ss');
Route::get('/superQuery','SuperQueryController@generarSuperQuery')->name('generar.SQ');
Route::post('/generarSuperQuery','SuperQueryController@postGenerarSuperQuery')->name('generar.SQ.post');
Route::get('/superQuerys','SuperQueryController@querys')->name('querys');
Route::post('/realizarSuperQuery','SuperQueryController@postRealizarSuperQuery')->name('realizar.consulta');




Auth::routes();

