<?php

use App\Http\Controllers\ReferralController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a         which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/about', function () {return view('welcome');});
Route::get('/', function () {return view('index');});
Route::get('/book', function () {return view('book');});
Route::post('/admin',function(){return dd("GET.. OUT IN PROGRESS");});
Route::post('/booked','BookingController@Register');
Route::get('/links',function(){return view('links');});

//Referals
Route::get('/view/{link_pvt}', ['uses' =>'ReferralController@View']);
Route::get('/wish/{link_pub}', 'ReferralController@Wish_check');
Route::get('/wished','ReferralController@Wish');
