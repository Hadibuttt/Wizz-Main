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
Route::get('/careers', [App\Http\Controllers\CareerController::class, 'view']);
Route::get('/careers-details/{id}', [App\Http\Controllers\CareerController::class, 'details']);
Route::get('/careers-apply/{id}', [App\Http\Controllers\CareerController::class, 'application_form']);



// Route::get('/job/add', [App\Http\Controllers\CareerController::class, 'create']);
// Route::post('/job/store', [App\Http\Controllers\CareerController::class, 'store']);
// Route::get('/job/edit/{id}', [App\Http\Controllers\CareerController::class, 'edit']);
// Route::post('/job/update/{id}', [App\Http\Controllers\CareerController::class, 'update']);
// Route::get('/job/destroy/{id}', [App\Http\Controllers\CareerController::class, 'destroy']);



// Route::view('/careers', 'career.job');
//Route::view('/careers/details', 'career.job_detail');
//Route::view('/careers-apply', 'career.job_apply');

