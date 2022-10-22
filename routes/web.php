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

//Landing Pages
Route::view('/', 'landing.index');
Route::view('/about', 'landing.about');
Route::view('/service', 'landing.service');
Route::view('/contact', 'landing.contact');

//Career Routes
Route::view('/careers', 'career.job');
Route::view('/careers-details', 'career.job_detail');
Route::view('/careers-apply', 'career.job_apply');

