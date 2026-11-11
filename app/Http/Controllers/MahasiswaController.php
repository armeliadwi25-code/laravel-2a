<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index() {
        $data['judul'] = 'DAFTAR MAHASISWA';
        $data['mahasiswa'] = [
            ['nama' => 'Anton', 'alamat' => 'Surabaya', 'gender' => 'L'],
            ['nama' => 'Budi',  'alamat' => 'Kediri',   'gender' => 'L'],
            ['nama' => 'Ani',   'alamat' => 'Malang',   'gender' => 'P'],
            ['nama' => 'Sinta', 'alamat' => 'Surabaya', 'gender' => 'P'],
        ];
        return view('mahasiswa', $data);
    }
}