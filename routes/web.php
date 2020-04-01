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

Route::get('/','Book_controller@home');

Route::get('/open','Book_controller@open');

Route::get('/close','Book_controller@close');

Route::get('/read','Book_controller@read');

Route::get('/write','Book_controller@write');
