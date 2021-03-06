<?php

namespace App\Http\Controllers;

use App\Models\Auto;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CabinetController extends Controller
{
    public function enterCabinet(){
        return view('cabinet')->with([
            'title'=>'Мій кабінет',
        ]);
    }

    public function getUser(){
        return response()->json([auth()->user(),csrf_token()]);
    }

    public function getMyAutos(){
        $autos=Auto::where('seller_id', '=', auth()->user()->id)->get();
        return response()->json($autos);
    }

}
