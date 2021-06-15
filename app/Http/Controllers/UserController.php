<?php

namespace App\Http\Controllers;

use App\Models\Auto;
use App\Models\Message;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{

    public function  create(){
        return view('user.create')->with([
            'title'=>'Реєстрація'
        ]);
    }

    public function store(Request $request){
        $rules=[
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|confirmed|min:8',
            'number'=>'digits:12|required|unique:users',

        ];
        $messages=[
            'email.unique'=>'Даний email вже зареєстрований',
            'password.confirmed'=>'Паролі не збігаються',
            'password.min'=>'Пароль повинен скаладати мінімум 8 символів',
            'number.digits'=>'Номер повинен складатись лише з цифр і містити в собі 12 символів',
            'number.unique'=>'Даний номер вже зареєстрований',
        ];
        Validator::make($request->all(),$rules,$messages)->validate();
        $user=User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
            'number'=>$request->number,
        ]);

        session()->flash('success', 'Ви успішно зарєєструвались');
        Auth::login($user);
        return redirect()->home();
    }

    public function change(Request $request){
        $user=User::find(auth()->user('id'));

        if ($user[0]->number==$request->number&&$user[0]->email==$request->email){
            $user[0]->name=$request->name;
        }
        elseif ($user[0]->number==$request->number){
            $request->validate([
                'email'=>'email|unique:users',
            ]);
            $user[0]->name=$request->name;
            $user[0]->email=$request->email;
        }
        elseif ($user[0]->email==$request->email){
            $request->validate([
                'number'=>'digits:12|unique:users'
            ]);
            $user[0]->name=$request->name;
            $user[0]->number=$request->number;
        }

        else{
            $request->validate([
                'email'=>'email|unique:users',
                'number'=>'digits:12|unique:users'
            ]);
            $user[0]->name=$request->name;
            $user[0]->email=$request->email;
            $user[0]->number=$request->number;
        }
        $user[0]->save();
        return redirect('/cabinet');
    }

    public function userLogin(){
        return view('user.login')->with([
            'title'=>'Вхід'
        ]);
    }

    public function login(Request $request){

        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:8',
        ]);

        if (Auth::attempt([
            'email'=>$request->email,
            'password'=>$request->password,
        ]))
        {
            return redirect('/cabinet');
        }
        else{
            return redirect('/userlogin')->with('error', 'Неправильний логін або пароль');
        }
        }

        public function logout(){
        Auth::logout();
        return redirect('/');
    }

    public function userCabinet(){
        return view('cabinet')->with([
            'title'=>'Мій кабінет',
            'User'=>auth()->user()
        ]);
    }

    public function userDelete(Request $request){
        User::destroy($request->id);
        $autos=Auto::where('seller_id','=',$request->id)->get();
        if (count($autos)){
            foreach ($autos as $auto){
                $messages=Message::where('auto_id','=',$auto->id)->get();
                foreach ($messages as $value)
                {
                    $value->delete();
                }
                $auto->destroy($auto->id);
            }
        }
        return redirect(route('admin_users'));
    }
}
