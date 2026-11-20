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
        $data = User::where('email', $request->email)->first();

        //jika datanya ketemu
        if ($data) {
            //cek apakah password sama
            if (Hash::check($request->password, $data->password)) {
                //simpan session
                session(['email' => $request->email]);
                session(['logged_in' => true]);

                //masuk ke dashboard
                return redirect('/dashboard');
            }
        }

        //jika email atau password salah, kembali ke login
        return redirect('/');
    }
}
