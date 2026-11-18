<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function home() {
        $data['judul'] = 'Laman Home';
        $data['isi'] = 'Lorem ipsum dolor sit amet';
        return view('home', $data);
    }

    public function gallery() {
        $data['judul'] = 'Laman Gallery';
        return view('gallery', $data);
    }
}