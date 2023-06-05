<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardLabController;
use App\Http\Controllers\DashboardUserController;
use App\Http\Controllers\DashboardAslabController;
use App\Http\Controllers\DashboardHasilController;
use App\Http\Controllers\DashboardProsesController;
use App\Http\Controllers\DashboardKriteriaController;
use App\Http\Controllers\DashboardNilaiUserController;
use App\Http\Controllers\DashboardPenilaianController;
use App\Http\Controllers\DashboardAlternatifController;
use App\Http\Controllers\DashboardNormalisasiController;

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

//Route Halaman Utama
Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
})->name('home');

//Route Sign In
Route::get('/signin', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/signin', [LoginController::class, 'authenticate']);

//Route Logout
Route::get('/logout', [LoginController::class, 'logout']);

//Route Register
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

//Route Dashboard
route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

//Route Data User
route::resource('/dashboard/user', DashboardUserController::class)->middleware('auth');

//Route Data Asisten Laboratorium
route::resource('/dashboard/aslab', DashboardAslabController::class)->middleware('auth');
Route::get('/pdf-aslab', [DashboardAslabController::class, 'exportpdf'])->middleware('auth');

//Route Data Laboratorium
route::resource('/dashboard/lab', DashboardLabController::class)->middleware('auth');
Route::get('/pdf-lab', [DashboardLabController::class, 'exportpdf'])->middleware('auth');

//Route Data alternatif
route::resource('/dashboard/alternatif', DashboardAlternatifController::class)->middleware('auth');
Route::get('/pdf-alternatif', [DashboardAlternatifController::class, 'exportpdf'])->middleware('auth');

//Route Data Kriteria
route::resource('/dashboard/kriteria', DashboardKriteriaController::class)->middleware('auth');

//Route Data Normalisasi
route::resource('/dashboard/normalisasi', DashboardNormalisasiController::class)->middleware('auth');

//Route Data Penilaian
route::resource('/dashboard/penilaian', DashboardPenilaianController::class)->middleware('auth');
Route::get('/pdf-nilai', [DashboardPenilaianController::class, 'exportpdf'])->middleware('auth');

//Route Data Nilai
route::resource('/dashboard/nilai', DashboardNilaiUserController::class)->middleware('auth');

//Route Data Proses
route::resource('/dashboard/proses', DashboardProsesController::class)->middleware('auth');
Route::get('/pdf-proses', [DashboardProsesController::class, 'exportpdf'])->middleware('auth');

//Route Data Hasil
route::resource('/dashboard/hasil', DashboardHasilController::class)->middleware('auth');
Route::get('/pdf-hasil', [DashboardHasilController::class, 'exportpdf'])->middleware('auth');