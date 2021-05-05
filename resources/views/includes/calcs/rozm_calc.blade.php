
<div class="">
    <form action="">
        <div class="section-title pb-3 pt-3">
            <span>Калькулятор вартості розмитнення</span>
        </div>
        <div class="d-flex justify-content-end">
            <div class="col my-auto">
                <label for="fuel" class="form-label">Пальне</label>
                <select class="form-select year mt-2" id="fuel" required="" >
                    <option value="1">Бензин</option>
                    <option value="2">Дизель</option>
                    <option value="3">Електро-кар</option>
                    <option value="4">Газ-бензин</option>
                </select>
            </div>
            <div class="col my-auto">
                <label for="country" class="form-label">Країна</label>
                <select class="form-select year mt-2" id="country" required="">
                    <option>Білорусь</option>
                    <option>Чехия</option>
                    <option>Молдова</option>
                    <option>Румунія</option>
                </select>
            </div>
            <div class="col my-auto">
                <label for="old" class="form-label">Вік</label>
                <select class="form-select year mt-2" id="old">
                    <option value="">1 рік</option>
                    <option>2 роки</option>
                    <option>3 роки</option>
                    <option>4 роки</option>
                </select>
            </div>
            <div class="col mt-auto">
                <label for="price" class="form-label pb-2">Вартість</label>
                <input type="text" class="form-select price-mini" placeholder="$" required="">
            </div>
            <div class="col mt-auto">
                <label for="price" class="form-label pb-2">Об'єм</label>
                <input type="text" class="form-select price-mini" placeholder="Куб.См" required="">
            </div>
            <div class="col my-auto">
                <button class="btn btn-warning">Розрахувати</button>
            </div>
        </div>
    </form>
</div>
