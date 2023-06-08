<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class CrudLoginController extends Controller
{
    public function admin(){
        $users = User::all();
        $title = 'Admin';
        return view('admin.account-data', compact('users', 'title'));

        $tittle = [
            'tittle' => 'admin',
        ];
        return view('admin.account-data', $tittle);
    }
}
