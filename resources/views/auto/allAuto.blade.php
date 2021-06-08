@extends('layouts.layout')

@section('content')

    @include('includes.header')

    <section class="card-car car-block section-padding bg-grey">
        <div class="container">
                    <span>@include('includes.mini_search')</span>
            <div id="interest-tab" class="row"><div class="col">
                    <div id="pills-tabContent" class="tab-content" style="min-height: 413px;">
                        <div id="all" role="tabpanel" aria-labelledby="all-tab" class="tab-pane fade show active">
                            <div id="all-cars-list" class="row">
                                @if (count($cars_array))
                                    @for($i=0;$i<count($cars_array);$i++)
                                        @include('includes.carMini',[
                                                    $id=$cars_array[$i]->id,
                                                    $image=$images[$i],
                                                    $price=$cars_array[$i]->price,
                                                    $mileage=$cars_array[$i]->mileage,
                                                    $year=$cars_array[$i]->year,
                                                    $name=$cars_array[$i]->brand.' '.$cars_array[$i]->model,
                                                    $auto_body=$cars_array[$i]->auto_body,
                                                    $transmission=$cars_array[$i]->transmission,
                                                    $fuel=$cars_array[$i]->fuel,
                                                    $drive_unit=$cars_array[$i]->drive_unit,])
                                    @endfor
                                @else
                                    <div class="col text-center">
                                        <h1 >Авто з даними параметрами не знайдено</h1>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('includes.footer')
@endsection
