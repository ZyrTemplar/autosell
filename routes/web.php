<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
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
        'img_arr'=>$img_arr
    ]);
})->name('home');

Route::get('/auto',function (){
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
    return view('announcement')->with([
        'photos'=>$photos,
        'about_car'=>$about_car,
    ]);
})->name('announcement');
