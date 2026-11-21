<?php

use Illuminate\Support\Facades\Route;

// import controller web dan taruh di routes dengan nama alias Web
use App\Http\Controllers\Web;

//import Controller Kalkulator diatas
use App\Http\Controllers\KalkulatorController;

//import Controller Mahasiswa agar bisa dipakai di route
use App\Http\Controllers\MahasiswaController;

//import controller EmployeController
use App\Http\Controllers\EmployeController;

//import Controller Dashboard
use App\Http\Controllers\DashboardController;

//load controller Auth
use App\Http\Controllers\AuthController;

//agar langsung masuk login
Route::get('/', function () {
    return view('login');
});

//route proses login
Route::post('/login', [AuthController::class, 'cek']);

// route baru
Route::get('/about', function () {
    //return view('welcome');
    return "<h2>Ini adalah halaman About</h2>";
});

// route ke controller web ke fungsi home
Route::get('/web', [Web::class, 'home']);

//route ke controller web ke fungsi profil
Route::get('/profil/{nama}', [Web::class, 'profil']);

//route untuk membuka controller web fungsi biodata
Route::get('/biodata', [Web::class, 'biodata']);

//route ke controller kalkulator
Route::get('/kalkulator', [KalkulatorController::class, 'home']);
//route untuk proses perhitungan
Route::post('/kalkulator/proses', [KalkulatorController::class, 'proses']);

//route untuk menampilkan daftar mahasiswa
Route::get('/daftar/mahasiswa', [MahasiswaController::class, 'index']);

//route untuk menampilkan form luas segitiga
Route::get('/kalkulator/segitiga', [KalkulatorController::class, 'segitiga']);
//route untuk proses perhitungan luas segitiga
Route::post('/kalkulator/segitiga', [KalkulatorController::class, 'hitungSegitiga']);

//route group yang harus login dahulu
Route::group(['middleware' => 'islogin'], function () {
    //route ke controller Dashboard
    Route::get('/dashboard', [DashboardController::class, 'home']);
    Route::get('/gallery', [DashboardController::class, 'gallery']);

    //route CRUD pegawai
    Route::get('/employe', [EmployeController::class, 'index']);
    Route::get('/employe/create', [EmployeController::class, 'create']);
    Route::post('/employe/store', [EmployeController::class, 'store']);
    Route::get('/employe/edit/{employe}', [EmployeController::class, 'show']);
    Route::put('/employe/{employe}', [EmployeController::class, 'update']);
    Route::delete('/employe/{employe}', [EmployeController::class, 'destroy']);

    //route logout
    Route::get('/logout', [AuthController::class, 'logout']);
});