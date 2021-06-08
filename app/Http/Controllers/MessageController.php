<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MessageController extends Controller
{
    public function store(Request $request){
        $rules=[
          'name'=>'required|max:255',
          'number'=>'required|digits:10',
          'email'=>'sometimes|nullable|email|max:255',
          'price'=>'sometimes|nullable|numeric|max:9999999999'
        ];
        $messages=[
            'name.max'=>"Поле ім'я повинно містити не більше 255 символів",
            'number.digits'=>'Номер повинен складатись з 10 чисел',
            'email.max'=>'Поле email повинно містити не більше 255 символів',
            'name.price'=>'Поле ціна повинно бути не більше 9999999999',
        ];
        Validator::make($request->all(),$rules,$messages)->validate();
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
