<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KalkulatorController extends Controller
{
    //menampilkan form perhitungan
    public function home() {
        $data['judul'] = 'Kalkulator Sederhana';
        $data['angka1'] = 0;
        $data['angka2'] = 0;
        $data['hasil'] = 0;
        return view('kalkulator', $data);
    }

    //proses perkalian
    public function proses(Request $request) {
        $data['judul'] = 'Kalkulator Sederhana';
        // menangkap input dari form
        $data['angka1'] = $request->input('angka1');
        $data['angka2'] = $request->input('angka2');
        //perkalian
        $data['hasil'] = $data['angka1'] * $data['angka2'];
        //render ke view
        return view('kalkulator', $data);
    }

    //menampilkan form luas segitiga
    public function segitiga() {
        $data['judul'] = 'Luas Segitiga';
        $data['alas'] = 0;
        $data['tinggi'] = 0;
        $data['hasil'] = 0;
        return view('segitiga', $data);
    }

    //proses perhitungan luas segitiga
    public function hitungSegitiga(Request $request) {
        $data['judul'] = 'Luas Segitiga';
        // menangkap input dari form
        $data['alas'] = $request->input('alas');
        $data['tinggi'] = $request->input('tinggi');
        //rumus luas segitiga = 1/2 x alas x tinggi
        $data['hasil'] = 0.5 * $data['alas'] * $data['tinggi'];
        //render ke view
        return view('segitiga', $data);
    }
}