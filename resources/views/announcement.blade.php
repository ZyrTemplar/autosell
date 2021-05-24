<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <title>Document</title>
</head>
<body>
@include('includes.header')

@include('includes.announcement_includes.price_and_buy')

<div class="container-fluid ">
    <div class="row">
        @include('includes.announcement_includes.carousel')
        <div class="col mt-3">
            <div class="min_params mx-5">
                <h1 class="text-center">Про автомобіль</h1>
                <div class="ml-5">
                    <h2>Рік випуску: {{$about_car['year']}}</h2>
                    <h2>Пробіг: {{$about_car['mileage']}} км</h2>
                    <h2>Об'єм двигуна: {{$about_car['objem']}} л</h2>
                    <h2>Тип палива: {{$about_car['fuel']}}</h2>
                    <h2>Форм-фактор двигуна: {{$about_car['engine_form']}}</h2>
                    <h2>Потужність: {{$about_car['capacity']}} к.с.</h2>
                    <h2>Тип кузова: {{$about_car['auto_body']}}</h2>
                    <h2>Тип КПП: {{$about_car['transmission']}}</h2>
                </div>
                <div class="col text-center my-3">
                    <div class="btn btn-warning btn-more" style="border-radius: 30px" onclick="more()">
                        <h1 class="mx-auto my-auto">Більше інформації</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('includes.announcement_includes.more')

@include('includes.announcement_includes.okno')

<div id="more">

</div>

@include('includes.footer')

<srcript scr="{{asset('js/app.js')}}"></srcript>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js"></script>
</body>
</html>
