<?php

use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MyController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('homepage');
});

Route::get('/form', [MyController::class, 'show']);

Route::post('/hasil', [MyController::class, 'tampil']);

Route::resource('/mahasiswa', MahasiswaController::class);
