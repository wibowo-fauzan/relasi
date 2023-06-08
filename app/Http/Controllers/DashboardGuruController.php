<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
// use App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Auth;

class DashboardGuruController extends Controller
{
    public function guru(){
        $user = Auth::user(); // Mendapatkan data pengguna yang sedang masuk
        $title = [
            'title' => $user->username, // Menggunakan username pengguna sebagai judul
        ];

        return view('guru', $title);
    }
}