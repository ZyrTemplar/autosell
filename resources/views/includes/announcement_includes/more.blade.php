<div class="modal fade" id="more" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered" role="document">
        <div class="modal-content modal-custom">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLongTitle">Повна інформація</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body row">
                <div class="col text-left">
                    <h3>Марка: {{$about_car['brand']}} </h3>
                    <h3>Модель: {{$about_car['model']}} </h3>
                    <h3>Модифікація: {{$about_car['modification']}} </h3>
                    <h3>Об'єм двигуна: {{$about_car['objem']}} л. </h3>
                    <h3>Потужність: {{$about_car['capacity']}} л/c. </h3>
                    <h3>Тип палива: {{$about_car['fuel']}} </h3>
                    <h3>Тип КПП: {{$about_car['transmission']}} </h3>
                    <h3>Тип приводу: {{$about_car['drive_unit']}} </h3>
                    <h3>Пробіг: {{$about_car['mileage']}} </h3>
                    <h3>Рік випуску: {{$about_car['year']}} </h3>
                    <h3>Форм-фактор двигуна: {{$about_car['engine_form']}} </h3>
                    <h3>Розгін до 100 км/год: {{$about_car['speeding']}} </h3>
                    <h3>Максимальна швидкість: {{$about_car['max_speed']}} </h3>
                    <h3>Кількість дверей: {{$about_car['doors']}} </h3>
                    <h3>Кількість місць: {{$about_car['places']}} </h3>
                    <h3>Тип кузову: {{$about_car['auto_body']}} </h3>
                    <h3>Колір: {{$about_car['color']}} </h3>
                    <h3>Область знаходження: {{$about_car['oblast']}} </h3>
                    <h3>Місто знаходження: {{$about_car['town']}} </h3>
                    <h3>Опис від продавця: {{$about_car['description']}} </h3>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-danger" data-dismiss="modal">Закрити</button>
            </div>
        </div>
    </div>
</div>
