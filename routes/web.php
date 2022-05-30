<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TampilkanPengmasController;

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
    return view('landingpage');
});

Route::get("/login", [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post("/login", [LoginController::class, 'authenticate'])->middleware('guest');

Route::get('/data', [TampilkanPengmasController::class, 'index'])->middleware('auth');
Route::post('/data/filter', [TampilkanPengmasController::class, 'filter'])->middleware('auth');
