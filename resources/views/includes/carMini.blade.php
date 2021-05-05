<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
    <div class="card">
        <div class="car-preview-img">
            <div id="carousel-car-{{$id}}" data-interval="false" data-ride="carousel" class="carousel slide w-100">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{$img_arr[0]}}" title="Volkswagen Polo" alt="Volkswagen Polo" class="d-block w-100" style="visibility: visible;">
                    </div>
                    <div class="carousel-item"><img src="{{$img_arr[1]}}" title="Volkswagen Polo" alt="Volkswagen Polo" class="d-block w-100" style="visibility: visible;">
                    </div>
                    <div class="carousel-item">
                        <img src="{{$img_arr[2]}}" title="Volkswagen Polo" alt="Volkswagen Polo" class="d-block w-100" style="visibility: visible;">
                    </div>
                </div>
                <a href="#carousel-car-{{$id}}" role="button" data-slide="prev" class="carousel-control-prev">
                    <span aria-hidden="true" class="carousel-control-prev-icon"></span>
                </a> <a href="#carousel-car-{{$id}}" role="button" data-slide="next" class="carousel-control-next">
                    <span aria-hidden="true" class="carousel-control-next-icon"></span>
                </a></div></div> <div class="about__info-cars"></div>
        <div class="card-body">
            <div class="list-card-body">
                <a href="/ru/catalog/car/{{$id}}">
                    <table>
                        <tr class="card-title">
                            <td>Volkswagen Polo</td>
                            <td class="carYear ml-3">2007</td>
                        </tr>
                    </table>
                </a>
            </div>
            <span class="old-car">
                <i class="fas old-car-icon"></i>
                <span>192199 км</span>
            </span>
            <div class="row car-info">
                <div class="col-6">
                    <div class="car-info__specifications">
                        <i class="param_icons pr-0"><img src="{{asset('/img/about_car/kuzov_icon.png')}}" alt=""></i> Хетчбек
                    </div>
                    <div class="car-info__specifications">
                        <i class="param_icons"><img src="{{asset('/img/about_car/geadrsgift_icon.png')}}" alt=""></i>Механіка
                    </div>
                </div>
                <div class="col-6">
                    <div class="car-info__specifications">
                        <i class="param_icons"><img src="{{asset('/img/about_car/engine_icon.png')}}" alt=""></i>Бензин
                    </div>
                    <div class="car-info__specifications">
                        <i class="param_icons"><img src="{{asset('/img/about_car/privod_icon.png')}}" alt=""></i>Передній
                    </div>
                </div>
            </div>
            <table>
                <tr>
                    <td> <img class="mr-1" src="{{asset('/img/valuta/grn.png')}}" alt=""></td>
                    <td class="price mt-1">140 000</td>
                </tr>
            </table>
            <a href="/ru/catalog/car/{{$id}}" class="btn btn-primary">
                Більше
            </a>
        </div>
    </div>
</div>
