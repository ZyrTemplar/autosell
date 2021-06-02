<?php

namespace App\Http\Controllers;

use App\Models\CarModel;
use Illuminate\Http\Request;

class AllCarsController extends Controller
{
    public function getAllCars(){
        $cars=new CarModel();
        return response()->json($cars->all());
    }
}
