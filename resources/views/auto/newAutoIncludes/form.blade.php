<div class="col-auto mt-2">
    @foreach($errors->all() as $error)
        <li class="alert col-4 mx-auto mt-1 alert-danger">{{$error}}</li>
    @endforeach
    <form class="form-control mx-auto w-75 p-2 h-100" id="new_auto" enctype="multipart/form-data" method="post" action="{{route('auto.store')}}">
        @csrf
        <div class="border mx-auto text-center br-20 col-3 border-width-4 border-red">
            <label for="images" class="form-label">Оберіть фото</label>
            <div class="btn btn-danger mb-3" onclick="loadPhoto()">Загрузити фото</div>
            <input class="form-file ml-4 mt-1 mb-3" id='images' style="display: none" type="file" name="image[]" multiple accept="image/*">
            <div class="mb-3">
                <div id="carousel_img" hidden class="carousel slide">
                    <div id="carousel_imgControls" class="carousel slide">
                        <div class="carousel-inner br-20" id="here">
                        </div>
                    </div>
                    <a class="carousel-control-next my-auto" href="#carousel_imgControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                    <a class="carousel-control-prev my-auto" href="#carousel_imgControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="border mt-2 pb-3 mx-auto text-center border-width-4 br-20 col-8 border-red">
            <h2>Основна інформація</h2>
            <div class="row ">
                <div class="col-4 ml-auto">
                    <label for="brand" class="form-label">Марка</label>
                    <select class="form-select" name="brand" id="brand" onchange="getModel()" required>
                        <option value="all"></option>
                    </select>
                </div>
                <div class="col-4 mr-auto">
                    <label for="model" class="form-label" >Модель</label>
                    <select class="form-select" name="model" id="model" onchange="getYear()" required>
                        <option value="all">Спочатку оберіть марку</option>
                    </select>
                </div>
            </div>
            <div class="row ">
                <div class="col-4 ml-auto">
                    <label for="year_to" class="form-label">Рік випуску</label>
                    <select class="form-select" name="year_to" id="year_to" required>
                        <option value="all">Спочатку оберіть модель</option>
                    </select>
                </div>
                <div class="col-4 mr-auto">
                    <label for="drive_unit" class="form-label">Тип приводу</label>
                    <select class="form-select" name="drive_unit" id="drive_unit" required>
                        <option value="Передній">Передній</option>
                        <option value="Задній">Задній</option>
                        <option value="Повний">Повний</option>
                    </select>
                </div>
            </div>
            <div class="row ">
                <div class="col-4 ml-auto">
                    <label for="price" class="form-label">Ціна</label>
                    <input class="form-control form-select" name="price" id="price" required placeholder="$" type="text">
                </div>
                <div class="col-4 mr-auto">
                    <label for="transmission" class="form-label">Тип КПП</label>
                    <select class="form-select" name="transmission" id="transmission" required>
                        <option value="Механічна">Механічна</option>
                        <option value="Автоматична">Автоматична</option>
                    </select>
                </div>
            </div>
            <div class="row ">
                <div class="col-4 ml-auto">
                    <label for="oblast" class="form-label">Область</label>
                    <input class="form-control form-select" name="oblast" id="oblast" required placeholder="Київська" type="text">
                </div>
                <div class="col-4 mr-auto">
                    <label for="town" class="form-label">Місто</label>
                    <input class="form-control form-select" name="town" id="town" required placeholder="Київ" type="text">
                </div>
            </div>
            <div class="row ">
                <div class="col-4 ml-auto">
                    <label for="mileage" class="form-label">Пробіг</label>
                    <input class="form-control form-select" name="mileage" id="mileage" required placeholder="км" type="text">
                </div>
                <div class="col-4 mr-auto">
                    <label for="fuel" class="form-label">Тип палива</label>
                    <select class="form-select" name="fuel" id="fuel">
                        <option value="Бензин">Бензин</option>
                        <option value="Дизель">Дизель</option>
                        <option value="Гібрид">Гібрид</option>
                        <option value="Газ">Газ</option>
                        <option value="Газ/Бензин">Газ/Бензин</option>
                        <option value="Електро">Електро</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="border mt-2 pb-3 mx-auto text-center border-width-4 br-20 col-8 border-red">
            <h2>Додаткова інформація</h2>
            <div class="row ">
                <div class="col-4 ml-auto">
                    <label for="objem" class="form-label">Об'єм</label>
                    <input class="form-control form-select" name="objem" id="objem" placeholder="5.0" type="text">
                </div>
                <div class="col-4 mr-auto">
                    <label for="capacity" class="form-label">Потужність</label>
                    <input class="form-control form-select" name="capacity" id="capacity" placeholder="575" type="text">
                </div>
            </div>
            <div class="row ">
                <div class="col-4 ml-auto">
                    <label for="color" class="form-label">Колір</label>
                    <input class="form-control form-select" name="color" id="color"  placeholder="Рожевий" type="text">
                </div>

                <div class="col-4 mr-auto">
                    <label for="modification" class="form-label" >Модифікація(рестайлінг)</label><br>
                    <input class="form-control form-select" name="modification" id="modification" type="text">
                </div>
            </div>
            <div class="row ">
                <div class="col-4 ml-auto">
                    <label for="engine_form" class="form-label">Тип двигуна</label>
                    <input class="form-control form-select" name="engine_form" id="engine_form" placeholder="V8" type="text">
                </div>
                <div class="col-4 mr-auto">
                    <label for="speeding" class="form-label">Розгін до 100км/год</label>
                    <input class="form-control form-select" name="speeding" id="speeding" placeholder="5" type="text">
                </div>
            </div>
            <div class="row ">
                <div class="col-4 ml-auto">
                    <label for="max_speed" class="form-label">Максимальна швидкість</label><br>
                    <input class=" form-control form-select" name="max_speed" id="max_speed" placeholder="185 км/год" type="text">
                </div>
                <div class="col-4 mr-auto">
                    <label for="doors" class="col-auto form-label">Кількість дверей</label><br>
                    <input class="form-control form-select" name="doors" id="doors" placeholder="5" type="text">
                </div>
            </div>
            <div class="row ">
                <div class="col-4 ml-auto">
                    <label for="places" class=" form-label">Кількість місць</label>
                    <input class="  form-control form-select" name="places" id="places" placeholder="5" type="text">
                </div>
                <div class="col-4 mr-auto">
                    <label for="auto_body" class=" form-label">Тип кузова</label><br>
                    <input class=" form-control form-select" name="auto_body" id="auto_body" required placeholder="SUV" type="text">
                </div>
            </div>
        </div>
        <div class="border mt-2 pb-3 mx-auto text-center border-width-4 br-20 col-8 border-red">
            <h2>Опис автомобіля</h2>
            <textarea class="form-control form-select" required name="description" id="description" cols="30" rows="6"></textarea>
        </div>
        <div class="col text-center my-4">
            <button id="submit_auto" type="submit" class="col-5 align-self-end mx-auto btn btn-danger" style="font-size: 30px">Розмістити оголошення</button>
        </div>
    </form>
</div>
<script>
    function handleFileSelect(evt) {
        $('#here').empty();
        let file = evt.target.files;
        for (let i = 0, f; f = file[i]; i++) {
            let reader = new FileReader();
            reader.onload = (function (theFile) {
                return function (e) {
                    var div = document.createElement('div');
                    if (i===0){div.setAttribute('class','carousel-item active')}
                    else{div.setAttribute('class','carousel-item')}
                    div.innerHTML = ['<img class="img-fluid" src="', e.target.result, '" alt="...">'].join('');
                    document.getElementById('here').insertBefore(div, null);
                };
            })(f);
            reader.readAsDataURL(f);
            document.getElementById('carousel_img').removeAttribute('hidden');
        }
    }
    document.getElementById('images').addEventListener('change', handleFileSelect, false);
</script>

