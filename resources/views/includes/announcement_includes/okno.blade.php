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
                <form action="/send_message" method="post" id="message_form">
                    @csrf
                    <label for="model" class="form-label">Модель авто</label>
                    <input type="text" name="car_id" hidden value="{{$about_car['id']}}">
                    <input class="form-control " name="model" id="model" type="text" value="{{$about_car['brand']}} {{$about_car['model']}}" readonly>

                    <label for="name" class="form-label">Введіть ваше ім'я</label>
                    <input type="text" name="name" id="name" class="form-control @error('name')is-invalid @enderror" placeholder="Ім'я" required>

                    <label for="number" class="form-label">Введіть ваш номер телефону</label>
                    <input type="number" name="number" id="number" class="form-control @error('number')is-invalid @enderror" placeholder="098-123-4567" required>

                    <label for="e-mail" class="form-label">Введіть ваш e-mail (не обов'язково)</label>
                    <input type="email" name="email" id="e-mail" class="form-control @error('e-mail')is-invalid @enderror" placeholder="example@example.com">

                    <label for="price" class="form-label">Ваша пропозиція ціни (не обов'язково)</label>
                    <input type="text" name="price" id="price" class="form-control @error('price')is-invalid @enderror" placeholder="10 000$">
            </div>
            <div class="modal-footer">
                <button class="btn btn-buy btn-success" id="send_message">Відправити</button>
            </div>
            </form>
        </div>
    </div>
</div>
