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

Route::get('/', 'Atv1Controller@p1');
Route::get('/p2', 'Atv1Controller@p2');
Route::get('/p3', 'Atv1Controller@p3');

