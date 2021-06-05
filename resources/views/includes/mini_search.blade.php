<div class="container">
    <form action="/sort" class=" mini col-7 mt-5 mx-auto mb-5">
        <div class="row">
            <div class="col-4 ml-auto">
                <label for="brand" class="form-label">Марка</label>
                <select class="form-select" id="brand" name="brand" onchange="getModel()" required>
                    <option value="all" selected>Будь-яка</option>
                </select>
            </div>
            <div class="col-4 mr-auto">
                <label for="model" class="form-label" >Модель</label>
                <select class="form-select" id="model" name="model" onchange="getYear()" required>
                    <option value="all" selected>Оберіть марку</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-4 ml-auto">
                <label for="year_from" class="form-label">Рік</label>
                <select class="form-select col-auto" name="year_from" id="year_from" required>
                    <option value="">Від</option>
                </select>
                <select class="form-select mt-2" id="year_to" name="year_to" required>
                    <option value="">До</option>
                </select>
            </div>
            <div class="col-4 mr-auto">
                <label for="price_from" class="form-label">Ціна $</label>
                <input type="text" class="form-select" name="price_from" id="price_from" placeholder="Від">
                <input type="text" class="form-select mt-2" name="price_to"  id="price_to" placeholder="До">
            </div>
        </div>
        <div class="text-center">
            <button type="submit" class="col-6 mx-auto mb-1 mt-4 btn btn-success">
                Знайти
            </button>
        </div>
    </form>
</div>
<hr class="align-self-center line" color=#454545>
