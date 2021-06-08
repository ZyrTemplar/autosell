<section class="card-car car-block section-padding bg-grey">
    <div class="container">
        <div class="row">
            <div class="section-title">
                <span>ВАС МОЖУТЬ ЗАЦІКАВИТИ</span>
            </div>
        </div>
        <div id="interest-tab" class="row"><div class="col">
                <div id="pills-tabContent" class="tab-content" style="min-height: 413px;">
                    <div id="all" role="tabpanel" aria-labelledby="all-tab" class="tab-pane fade show active">
                        <div id="all-cars-list" class="row">
                            @include('includes.carMini',[
                                        $id=$cars_array['car1']->id,
                                        $image=$images['car1'],
                                        $price=$cars_array['car1']->price,
                                        $mileage=$cars_array['car1']->mileage,
                                        $year=$cars_array['car1']->year,
                                        $name=$cars_array['car1']->brand.' '.$cars_array['car1']->model,
                                        $auto_body=$cars_array['car1']->auto_body,
                                        $transmission=$cars_array['car1']->transmission,
                                        $fuel=$cars_array['car1']->fuel,
                                        $drive_unit=$cars_array['car1']->drive_unit,])
                            @include('includes.carMini',[
                                        $id=$cars_array['car2']->id,
                                        $image=$images['car2'],
                                        $price=$cars_array['car2']->price,
                                        $mileage=$cars_array['car2']->mileage,
                                        $year=$cars_array['car2']->year,
                                        $name=$cars_array['car2']->brand.' '.$cars_array['car2']->model,
                                        $auto_body=$cars_array['car2']->auto_body,
                                        $transmission=$cars_array['car2']->transmission,
                                        $fuel=$cars_array['car2']->fuel,
                                        $drive_unit=$cars_array['car2']->drive_unit,])
                            @include('includes.carMini',[
                                        $id=$cars_array['car3']->id,
                                        $image=$images['car3'],
                                        $price=$cars_array['car3']->price,
                                        $mileage=$cars_array['car3']->mileage,
                                        $year=$cars_array['car3']->year,
                                        $name=$cars_array['car3']->brand.' '.$cars_array['car3']->model,
                                        $auto_body=$cars_array['car3']->auto_body,
                                        $transmission=$cars_array['car3']->transmission,
                                        $fuel=$cars_array['car3']->fuel,
                                        $drive_unit=$cars_array['car3']->drive_unit,])
                            @include('includes.carMini',[
                                        $id=$cars_array['car4']->id,
                                        $image=$images['car4'],
                                        $price=$cars_array['car4']->price,
                                        $mileage=$cars_array['car4']->mileage,
                                        $year=$cars_array['car4']->year,
                                        $name=$cars_array['car4']->brand.' '.$cars_array['car4']->model,
                                        $auto_body=$cars_array['car4']->auto_body,
                                        $transmission=$cars_array['car4']->transmission,
                                        $fuel=$cars_array['car4']->fuel,
                                        $drive_unit=$cars_array['car4']->drive_unit,])
                            <div class="row mx-auto">
                                <div class="button-block">
                                    <a class="icon-btn catalog-icon" href="/auto">Каталог авто</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
