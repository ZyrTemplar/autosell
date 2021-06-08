<?php

namespace App\Http\Controllers;

use App\Models\Auto;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
            $title='AutoSell';
            $autos_count=count(Auto::all());
            $id1=12;
            $id2=13;
            $id3=9;
            $id4=11;
            $images=array();
            $cars_array=array(
                'car1'=> Auto::find($id1),
                'car2'=> Auto::find($id2),
                'car3'=> Auto::find($id3),
                'car4'=> Auto::find($id4),
            );
            $car_number=1;
            foreach ($cars_array as $value){
                $img=[
                  $value->photo1,
                  $value->photo2,
                  $value->photo3,
                  $value->photo4,
                  $value->photo5,
                  $value->photo6,
                  $value->photo7,
                  $value->photo8,
                  $value->photo9,
                  $value->photo10,
                ];
                for ($i=0;$i<10;$i++){
                    if ($img[$i]==NULL){
                        unset($img[$i]);
                    }
                }
                $images['car'.$car_number] = $img;
                $car_number++;
            }
            return view('home')->with([
                'cars_array'=>$cars_array,
                'images'=>$images,
                'title'=>$title,
            ]);
    }
}
