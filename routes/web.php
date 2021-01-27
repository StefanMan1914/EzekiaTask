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

//Auth::routes();

Route::get('/candidate/import', 'App\Http\Controllers\CandidateController@show');
Route::post('/candidate/import', 'App\Http\Controllers\CandidateController@store')->name('store');

Route::get('/job/import_job', 'App\Http\Controllers\JobController@show_job');
Route::post('/job/import_job', 'App\Http\Controllers\JobController@store_job')->name('store_job');