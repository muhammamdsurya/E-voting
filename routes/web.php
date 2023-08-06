<?php

use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\KandidatController;

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
    return view('welcome');
});

Route::get('/menu', [KandidatController::class, 'index']);

Route::get('/admin', [AuthController::class, 'adminLogin']);
Route::post('/admin', [AuthController::class, 'authenticate']);

Route::get('/login', [AuthController::class, 'userLogin'])->name('login');
Route::get('/logout', [AuthController::class, 'logout']);

Route::get('/dashboard', [AdminController::class, 'dashboard'])->middleware('auth.redirect')->name('dashboard');
Route::get('/kandidat', [AdminController::class, 'kandidat'])->middleware('auth');


Route::get('/tambah-pemilih', [AdminController::class, 'tambahData'])->middleware('auth');
