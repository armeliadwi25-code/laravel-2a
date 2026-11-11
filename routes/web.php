<?php

use Illuminate\Support\Facades\Route;

// import controller web dan taruh di routes dengan nama alias Web
use App\Http\Controllers\Web;

//import Controller Kalkulator diatas
use App\Http\Controllers\KalkulatorController;




Route::get('/', function () {

    // return view("wellcome);
    return 'Halo Nama Ku adalah Laravel, Salam Kenal';
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