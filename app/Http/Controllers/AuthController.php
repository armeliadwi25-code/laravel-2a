<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//load Model User
use App\Models\User;

//load HASH untuk cek password
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //fungsi untuk login
    public function cek(Request $request) {
        //mencari data email di table users
        $data = User::where('email', $request->email)->firstOrFail();
        //jika datanya ketemu
        if ($data) {
            //cek apakah password sama
            if (Hash::check($request->password, $data->password)) {
                //simpan session
                session(['email' => $request->email]);
                session(['logged_in' => true]);
                //masuk ke dashboard
                return redirect('/dashboard');
            } else {
                //kembali ke login
                return redirect('/');
            }
        } else {
            //kembali ke login
            return redirect('/');
        }
    }

    //fungsi untuk logout
    public function logout(Request $request) {
        //hapus semua session
        $request->session()->flush();

        //kembali ke login
        return redirect('/');
    }
}