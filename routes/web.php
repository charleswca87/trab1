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
Route::get('Pagi1','PaginaControle@Pagi1');
Route::get('Pagi2','PaginaControle@Pagi2');
Route::get('Pagi3','PaginaControle@Pagi3');
