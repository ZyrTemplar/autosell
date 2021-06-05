<?php

namespace App\Http\Controllers;

use App\Models\Auto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SortController extends Controller
{
    public function miniSerach(Request $request){
        DB::enableQueryLog();
        foreach ($request->request as $key => $value){
            dump($value);
            if ($value==NULL){
                $filter[$key]='*';
            }
            else{
                $filter[$key]=$value;
            }
        }

        if ($filter['price_to']=='*'&&$filter['price_from']=='*'){
            $autos=Auto::where('brand','=',$filter['brand'])
                ->where('model','=',$filter['model'])
                ->where('year','>=',$filter['year_from'])
                ->where('year','<=',$filter['year_to'])
                ->get();
        }
        elseif ($filter['price_from']=='*'){
            $autos=Auto::where('brand','=',$filter['brand'])
                ->where('model','=',$filter['model'])
                ->where('year','>=',$filter['year_from'])
                ->where('year','<=',$filter['year_to'])
                ->where('price','<=',$filter['price_to'])
                ->get();
        }
        elseif ($filter['price_to']=='*'){
            $autos=Auto::where('brand','=',$filter['brand'])
                ->where('model','=',$filter['model'])
                ->where('year','>=',$filter['year_from'])
                ->where('year','<=',$filter['year_to'])
                ->where('price','>=',$filter['price_from'])
                ->get();
        }

        else{
            $autos=Auto::where('brand','=',$filter['brand'])
                ->where('model','=',$filter['model'])
                ->where('year','>=',$filter['year_from'])
                ->where('year','<=',$filter['year_to'])
                ->where('price','>=',$filter['price_from'])
                ->where('price','<=',$filter['price_to'])
                ->get();
        }
        dd($autos);
        return 'test';
    }
}
