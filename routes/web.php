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


//agar langsung masuk login
Route::get('/', function () {
    return view('login');
});

// route baru
Route::get('/about', function () { 
    //return view('welcome'); 
    return "<h2>Ini adalah halaman About</h2>"; 
    }); 

// route ke controller web ke fungsi home
Route::get('/web', [Web::class, 'home']);

//route ke controller web ke fungsi profil
Route::get('/profil/{nama}', [Web::class, 'profil']); 

//route untuk membuka view biodata
Route::get('/biodata', function () {
    return view('biodata');
});

//route untuk membuka controller web fungsi biodata
Route::get('/biodata', [Web::class, 'biodata']);

//route ke controller kalkulator
Route::get('/kalkulator',[KalkulatorController::class, 'home']);
//route untuk proses perhitungan
Route::post('/kalkulator/proses',[KalkulatorController::class, 'proses']);

//route untuk menampilkan daftar mahasiswa
//jika URL /daftar/mahasiswa dibuka, jalankan fungsi index() di MahasiswaController
Route::get('/daftar/mahasiswa', [MahasiswaController::class, 'index']);

//route untuk menampilkan form luas segitiga
Route::get('/kalkulator/segitiga', [KalkulatorController::class, 'segitiga']);
//route untuk proses perhitungan luas segitiga
Route::post('/kalkulator/segitiga', [KalkulatorController::class, 'hitungSegitiga']);

//import Controller diatas
use App\Http\Controllers\DashboardController;
//....
//route ke controller Dashboard
Route::get('/dashboard',[DashboardController::class, 'home']);

// route ke controller Dashboard untuk menampilkan gallery
Route::get('/gallery', [DashboardController::class, 'gallery']);

//route untuk menampilkan data pegawai
Route::get('/employe', [EmployeController::class, 'index']);

//route form tambah data
Route::get('/employe/create', [EmployeController::class, 'create']);

//route proses simpan data
Route::post('/employe/store', [EmployeController::class, 'store']);

//route form edit data
Route::get('/employe/edit/{employe}', [EmployeController::class, 'show']);

//route proses update data
Route::put('/employe/{employe}', [EmployeController::class, 'update']);

//route hapus data
Route::delete('/employe/{employe}', [EmployeController::class, 'destroy']);