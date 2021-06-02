<?php

namespace App\Http\Controllers;

use App\Models\Auto;
use App\Models\Brand;
use App\Models\CarModel;
use Illuminate\Http\Request;

class AutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('auto.newAuto')->with([
            'title'=>'Нове авто'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dump($request);
        $request->file('image')->store('uploads','public');
        Auto::create([
           'brand'=>$request->brand,
           'modification'=>$request->modification,
           'model'=>$request->model,
           'drive_unit'=>$request->drive_unit,
           'objem'=>$request->objem,
           'capacity'=>$request->capacity,
           'fuel'=>$request->fuel,
           'transmission'=>$request->transmission,
           'mileage'=>$request->mileage,
           'year'=>$request->year_to,
           'price'=>$request->price,
           'engine_form'=>$request->engine_form,
           'speeding'=>$request->speeding,
           'max_speed'=>$request->max_speed,
           'doors'=>$request->doors,
           'places'=>$request->places,
           'auto_body'=>$request->auto_body,
           'color'=>$request->color,
           'town'=>$request->town,
           'description'=>$request->description,
           'seller_id'=>auth()->user('id')->id,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
            $photos=[
                asset('/img/range2.jpg'),
                asset('/img/range3.jpg'),
                asset('/img/land-rover-range-rover-sport-2021.jpg')
            ];
            $about_car= [];
            $about_car['brand']='Land Rover';
            $about_car['model']='Range Rover Sport';
            $about_car['objem']='5.0';
            $about_car['capacity']='575';
            $about_car['fuel']='Бензин';
            $about_car['transmission']='Автомат';
            $about_car['drive_unit']='Повний';
            $about_car['mileage']='0';
            $about_car['year']='2021';
            $about_car['price']=5000000;
            $about_car['engine_form']='V8';
            $about_car['speeding']='5 секунд';
            $about_car['max_speed']='185 км/год';
            $about_car['doors']=5;
            $about_car['places']=5;
            $about_car['auto_body']='SUV';
            $about_car['color']='Синій';
            $about_car['town']='Kyiv';
            $about_car['description']='Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt dignissimos ea ipsam ipsum quia sequi ut voluptatum. Atque consequuntur corporis impedit ipsa maiores nemo quae quaerat sint? Atque, commodi, ratione.' ;
            $about_car['seller_id']='123456789';
            $title=$about_car['model'];
            return view('announcement')->with([
                'photos'=>$photos,
                'about_car'=>$about_car,
                'title'=>$title
            ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
