<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function store(Request $request){
        Message::create([
           'name'=>$request->name,
           'auto_model'=>$request->model,
           'auto_id'=>$request->car_id,
           'number'=>$request->number,
           'email'=>$request->email,
           'price'=>$request->price,
        ]);
        return redirect('/auto/'.$request->car_id);
    }
}
