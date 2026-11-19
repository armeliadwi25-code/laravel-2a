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

    public function create() {
        $data['judul'] = 'Tambah data Pegawai';
        return view('tambah_data', $data);
    }

    public function store(Request $request) {
        //ambil data di form
        $employe = new Employe;

        $employe->nama = $request->nama;
        $employe->alamat = $request->alamat;
        $employe->gender = $request->gender;
        $employe->gaji = $request->gaji;

        //simpan dalam database
        $employe->save();

        //jika berhasil kembali ke tampil data
        return redirect('/employe');
    }

    public function show(Employe $employe) {
        $data['judul'] = 'Edit data Pegawai';
        $data['employe'] = $employe;
        return view('edit_data', $data);
    }

    public function update(Request $request, Employe $employe) {
        //update data berdasarkan id
        $employe = Employe::find($employe->id);

        //ambil data dari form edit
        $employe->nama = $request->nama;
        $employe->alamat = $request->alamat;
        $employe->gender = $request->gender;
        $employe->gaji = $request->gaji;

        //ubah data dalam database
        $employe->save();

        //kembali ke tabel utama
        return redirect('/employe');
    }

    public function destroy(Employe $employe) {
        //cari data yang akan dihapus
        $employe = Employe::find($employe->id);

        //hapus data dari database
        $employe->delete();

        //kembali ke tabel utama
        return redirect('/employe');
    }
}