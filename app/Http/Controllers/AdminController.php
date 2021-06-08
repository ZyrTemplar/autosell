<?php

namespace App\Http\Controllers;

use App\Models\Auto;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function autos(){
        $autos=Auto::all();
        $users=User::all();
        return view('admin.admin_autos')->with([
            'autos'=>$autos,
            'users'=>$users,
            'title'=>'Адмін панель'
        ]);
    }

    public function users(){
        $users=User::all();
        return view('admin.admin_users')->with([
            'users'=>$users,
            'title'=>'Адмін панель'
        ]);
    }
}
