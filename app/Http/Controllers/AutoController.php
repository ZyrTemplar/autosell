<?php

namespace App\Http\Controllers;

use App\Models\Auto;
use App\Models\Brand;
use App\Models\CarModel;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $autos=Auto::all();

        $car_number=0;
        foreach ($autos as $value){
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
                'title'=>'Список авто',
                'images'=>$images,
                'cars_array'=>$autos
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
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
        $rules=[
            'modification'=>'sometimes|nullable|string|max:40',
            'objem'=>'sometimes|nullable|numeric|max:12',
            'capacity'=>'sometimes|nullable|numeric|max:1000',
            'mileage'=>'numeric|max:99999999',
            'price'=>'required|numeric|max:99999999',
            'engine_form'=>'sometimes|nullable|string|max:30',
            'speeding'=>'sometimes|nullable|string|max:12',
            'max_speed'=>'sometimes|nullable|numeric|max:500',
            'doors'=>'sometimes|nullable|numeric|max:12',
            'places'=>'sometimes|nullable|numeric|max:12',
            'auto_body'=>'required|string|max:255',
            'color'=>'sometimes|nullable|string|max:255',
            'town'=>'sometimes|nullable|string|max:255',
            'oblast'=>'sometimes|nullable|string|max:255',
            'description'=>'string|max:1000',
        ];
        $messages=[
            'modification.max'=>'Поле модифікація повинно містити не більше 40 симвлів',
            'objem.max'=>"Поле об'єм повинно містити не більше 12 симвлів",
            'capacity.max'=>"Поле потужності повинно бути не більше 1000",
            'mileage.max'=>"Поле пробіг повинно бути не більше 10000000",
            'price.max'=>"Поле ціна повинно бути не більше 10000000",
            'engine_form.max'=>"Поле форми двигуна повинно бути не більше 30 символів",
            'speeding.max'=>"Поле розгону повинно бути не більше 12 символів",
            'max_speed.max'=>"Поле максимальна швидкость повинно бути не більше 500",
            'doors.max'=>"Поле кількості дверей повинно бути не більше 12",
            'places.max'=>"Поле кількості місць повинно бути не більше 12",
            'auto_body.max'=>"Поле типу кузову повинно бути не більше 255 символів",
            'color.max'=>"Поле колір повинно бути не більше 255 символів",
            'town.max'=>"Поле місто повинно бути не більше 255 символів",
            'oblast.max'=>"Поле область повинно бути не більше 255 символів",
            'description.max'=>"Поле область повинно бути не більше 1000 символів",
            'objem.numeric'=>"Поле об'єм повинно містити лише числа",
            'capacity.numeric'=>"Поле потужність повинно містити лише числа",
            'mileage.numeric'=>"Поле пробіг повинно містити лише числа",
            'price.numeric'=>"Поле ціна повинно містити лише числа",
            'max_speed.numeric'=>"Поле максимальна швидкість повинно містити лише числа",
            'doors.numeric'=>"Поле кількість дверей повинно містити лише числа",
            'places.numeric'=>"Поле кількість місць повинно містити лише числа",
        ];
        $validator=Validator::make($request->all(),$rules,$messages)->validate();

        for ($i=0;$i<count($request->image);$i++){
            $images[$i] = $request->image[$i]->store('uploads', 'public');
        }
        $auto=Auto::create([
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
           'oblast'=>$request->oblast,
           'description'=>$request->description,
           'seller_id'=>auth()->user()->id,
        ]);
        for ($i=0;$i<count($images);$i++){
            $temp=$i+1;
            $auto['photo'.$temp]=$images[$i];
        }
        $auto->save();
        return redirect('/cabinet');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     */
    public function show($id)

    {
        $about_car=Auto::find($id);
        $messages=Message::where('auto_id','=',$about_car->id)->get();
        $photos=[
            asset('/storage/'.$about_car['photo1']),
            asset('/storage/'.$about_car['photo2']),
            asset('/storage/'.$about_car['photo3']),
            asset('/storage/'.$about_car['photo4']),
            asset('/storage/'.$about_car['photo5']),
            asset('/storage/'.$about_car['photo6']),
            asset('/storage/'.$about_car['photo7']),
            asset('/storage/'.$about_car['photo8']),
            asset('/storage/'.$about_car['photo9']),
            asset('/storage/'.$about_car['photo10']),
        ];
        $title=$about_car['model'];
        return view('announcement')->with([
            'photos'=>$photos,
            'about_car'=>$about_car,
            'title'=>$title,
            'messages'=>$messages
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
     */
    public function destroy($id)
    {
        Auto::destroy($id);
        $messages=Message::where('auto_id','=',$id)->get();
        foreach ($messages as $value){
            $value->delete();
        }
        if (auth()->user()->email=='admin@admin'){
            return redirect(route('/admin/autos'));
        }
        return redirect('/cabinet');
    }
}
