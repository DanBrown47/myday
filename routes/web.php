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


Route::get('/about', function () {return view('welcome');});
Route::get('/', function () {return view('index');});
Route::get('/book', function () {return view('book');});
Route::post('/booked','BookingController@Register');

