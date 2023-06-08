<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;


class DashboardMuridController extends Controller
{
    public function murid(){
        return view('murid');
    }
}
