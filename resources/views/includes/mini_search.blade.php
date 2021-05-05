<div class="container">
    <form action="" class="mini col-sm-7 xxl mx-auto mb-5">
        <div class="row">
            <div class="col-4">
                <label for="brand" class="form-label">Марка</label>
                <select class="form-select" id="brand" required="">
                    <option value="">Оберіть марку</option>
                    <option>BMW</option>
                    <option>Mercedes-Benz</option>
                    <option>Audi</option>
                </select>
            </div>
            <div class="col-4">
                <label for="model" class="form-label">Модель</label>
                <select class="form-select" id="model" required="">
                    <option value="">Оберіть модель</option>
                    <option></option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-2">
                <label for="year_from" class="form-label">Рік</label>
                <select class="form-select year" id="year_from" required="">
                    <option value="">Від</option>
                    <option>2021</option>
                    <option>2020</option>
                    <option>2019</option>
                </select>
                <select class="form-select year mt-2" id="year_to" required="">
                    <option value="">До</option>
                    <option>2021</option>
                    <option>2020</option>
                    <option>2019</option>
                </select>
            </div>
            <div class="col-2 ml-4">
                <label for="price_from" class="form-label">Ціна $</label>
                <input type="text" class="form-select price-mini" id="price_from" placeholder="Від">
                <input type="text" class="form-select price-mini mt-2" placeholder="До" id="price_to">
            </div>
            <div class="col-4 btn ml-4">
                <p class="col-2 btn btn-success">
                    Знайти
                </p>
                <p class="col-2 btn btn-danger">
                    Розширений пошук
                </p>
            </div>
        </div>
    </form>
</div>
<hr class="align-self-center line" color=#454545>
