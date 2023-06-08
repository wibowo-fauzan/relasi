<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
// use App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Auth;

class DashboardWalikelasController extends Controller
{
    public function walikelas(){
        return view('walikelas');
    }
}