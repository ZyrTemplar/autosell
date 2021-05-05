<div class="container-fluid">
    <div class="row">
        <div class="car_label col-7  ml-3">
            {{$about_car['brand']}} {{$about_car['model']}} {{$about_car['year']}}
        </div>
        <div class="price-label col">
            <div class='row'>
                <div class="mr-3 ml-auto">
                    {{$about_car['price']}} ₴
                </div>
                <div class="col btn btn-buy btn-success ml-0 mb-2 mr-4" data-toggle="modal" data-target="#exampleModalCenter">
                    Придбати
                </div>
            </div>
        </div>
    </div>
</div>
