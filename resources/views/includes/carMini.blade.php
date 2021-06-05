<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3 mt-3">
    <div class="card">
        <div class="car-preview-img">
            <div id="carousel-car-{{$id}}" data-interval="false" data-ride="carousel" class="carousel slide w-100">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{asset('/storage/'.$image[0])}}" title="Volkswagen Polo" alt="Volkswagen Polo" class="d-block w-100" style="visibility: visible;">
                    </div>
                    @for($i=1;$i<count($image);$i++)
                        <div class="carousel-item">
                            <img src="{{asset('/storage/'.$image[$i])}}" title="Volkswagen Polo" alt="Volkswagen Polo" class="d-block w-100" style="visibility: visible;">
                        </div>
                    @endfor
                </div>
                <a href="#carousel-car-{{$id}}" role="button" data-slide="prev" class="carousel-control-prev">
                    <span aria-hidden="true" class="carousel-control-prev-icon"></span>
                </a> <a href="#carousel-car-{{$id}}" role="button" data-slide="next" class="carousel-control-next">
                    <span aria-hidden="true" class="carousel-control-next-icon"></span>
                </a>
            </div>
        </div>
        <div class="about__info-cars"></div>
        <div class="card-body">
            <div class="list-card-body">
                <a href="auto/{{$id}}">
                    <table>
                        <tr class="card-title row">
                            <td class="text-decoration-none col-auto pl-0 height-60" style="font-size: 19px; width: 150px; font-weight: bold; color: #353535" >{{$name}}</td>
                            <td class="carYear col-auto">{{$year}}</td>
                        </tr>
                    </table>
                </a>
            </div>
            <span class="old-car">
                <i class="fas old-car-icon"></i>
                <span>{{$mileage}} км</span>
            </span>
            <div class="row car-info">
                <div class="col-7 pr-1">
                    <div class="car-info__specifications">
                        <i class="param_icons pr-1"><img src="{{asset('/img/about_car/kuzov_icon.png')}}" alt=""></i>{{$auto_body}}
                    </div>
                    <div class="car-info__specifications">
                        <i class="param_icons"><img src="{{asset('/img/about_car/geadrsgift_icon.png')}}" alt=""></i>{{$transmission}}
                    </div>
                </div>
                <div class="col-5 pr-1 pl-1">
                    <div class="car-info__specifications">
                        <i class="param_icons"><img src="{{asset('/img/about_car/engine_icon.png')}}" alt=""></i>{{$fuel}}
                    </div>
                    <div class="car-info__specifications">
                        <i class="param_icons"><img src="{{asset('/img/about_car/privod_icon.png')}}" alt=""></i>{{$drive_unit}}
                    </div>
                </div>
            </div>
            <table>
                <tr>
                    <td> <img class="mr-1" src="{{asset('/img/valuta/dollar.png')}}" alt=""></td>
                    <td class="price mt-1">{{$price}}</td>
                </tr>
            </table>
            <a href="auto/{{$id}}" class="btn btn-primary">
                Більше
            </a>
        </div>
    </div>
</div>
