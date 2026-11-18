<?php

namespace App\Http\Controllers;

// load model
use App\Models\Employe;
use Illuminate\Http\Request;

class EmployeController extends Controller
{
    public function index() {
        $data['judul'] = 'CRUD data Pegawai';
        $data['employes'] = Employe::all();
        return view('tampil_data', $data);
    }
}