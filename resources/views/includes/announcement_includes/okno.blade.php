<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLongTitle">Заповніть форму</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="">
                    <label for="model" class="form-label">Модель авто</label>
                    <input class="form-control" id="model" type="text" placeholder="{{$about_car['brand']}} {{$about_car['model']}}" readonly>

                    <label for="Name" class="form-label">Ведіть ваше ім'я</label>
                    <input type="text" id="Name" class="form-control" placeholder="Ім'я" required>

                    <label for="Number" class="form-label">Ведіть ваш номер телефону</label>
                    <input type="text" id="Number" class="form-control" placeholder="098-123-4567" required>

                    <label for="E-mail" class="form-label">Ведіть ваш e-mail (не обов'язково)</label>
                    <input type="email" id="E-mail" class="form-control" placeholder="example@gmail.com">

                    <label for="Price" class="form-label">Ваша пропозиція ціни (не обов'язково)</label>
                    <input type="text" id="Price" class="form-control" placeholder="10 000$">

            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-buy btn-success">Відправити</button>
            </div>
            </form>
        </div>
    </div>
</div>
