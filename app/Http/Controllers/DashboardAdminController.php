<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class DashboardAdminController extends Controller
{
    public function admin()
{
    $tittle = 'admin';

    $admin = DB::table('users')->where('role', 'admin')->get();
    $gurubk = DB::table('users')->where('role', 'gurubk')->get();
    $walikelas = DB::table('users')->where('role', 'walikelas')->get();
    $murid = DB::table('users')->where('role', 'murid')->get();

    return view('dashboard', compact('tittle', 'admin', 'gurubk', 'walikelas', 'murid'));


}
    
}