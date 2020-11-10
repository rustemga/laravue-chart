<?php

use App\Http\Controllers\StartController;
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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', [StartController::class, 'index'])->name('start');
Route::get('/get-json', [StartController::class, 'getJson'])->name('getJson');
Route::get('/get-json-for-chart', [StartController::class, 'chartData'])->name('getJsonForChart');
Route::get('/get-socket-chart', [StartController::class, 'newEvent'])->name('socketChart');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
