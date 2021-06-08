<?php

namespace App\Http\Controllers;

use App\Models\Auto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SortController extends Controller
{
    public function miniSerach(Request $request){
        $autos=Auto::all();
        $sorter_autos=array();
        $car_number=0;
        $images=array();
        if ($request['price_to']==NULL){
            $request['price_to']=99999999999999999999;
        }
        if ($request['brand']=='all'){
            $sorter_autos=$autos;
        }
        else{
            foreach ($autos as $value){
                if ($value->brand==$request['brand']
                    &&$value->model==$request['model']
                    &&$value->year>=$request['year_from']
                    &&$value->year<=$request['year_to']
                    &&$value->price>=$request['price_from']
                    &&$value->price<=$request['price_to'])
                {
                    $sorter_autos[$car_number]=$value;
                    $car_number++;
                }
            }
        }
        $car_number=0;
        foreach ($sorter_autos as $value){
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
            $images[$car_number] = $img;
            $car_number++;
        }

        return view('auto.allAuto')->with(
            [
                'title'=>$request['brand'],
                'images'=>$images,
                'cars_array'=>$sorter_autos
            ]
        );
    }
}
