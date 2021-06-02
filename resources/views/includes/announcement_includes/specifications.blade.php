<div class="container-fluid ">
    <div class="row">
        @include('includes.announcement_includes.carousel')
        <div class="col mt-3">
            <div class="min_params mx-5 revealator-slideleft">
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
                    <div class="btn btn-warning btn-more" style="border-radius: 30px" data-toggle="modal" data-target="#more">
                        <h1 class="mx-auto my-auto">Більше інформації</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
