<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
            $title='AutoSell';
            $id1=1;
            $id2=2;
            $id3=3;
            $id4=4;
            $img_arr=[
                asset('/img/range2.jpg'),
                asset('/img/range3.jpg'),
                asset('/img/land-rover-range-rover-sport-2021.jpg')
            ];
            return view('home')->with([
                'id1'=>$id1,
                'id2'=>$id2,
                'id3'=>$id3,
                'id4'=>$id4,
                'img_arr'=>$img_arr,
                'title'=>$title
            ]);
    }
}
