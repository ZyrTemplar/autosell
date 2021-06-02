<form action="/register" method="POST" class=" h-100 mt-5  pl-5 col">
    @csrf

    <div class="slogan text-center w-50 mx-auto">Реєстрація</div>

    <div class="form-group w-50 mx-auto">
        <h2><label for="name">Ваше ім'я</label></h2>
        <input type="text" class="form-control" placeholder="Василь" id="name" name="name" required value="{{old('name')}}">
        @error('name')
        <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
        @enderror
    </div>


    <div class="form-group w-50 mx-auto">
        <h2><label for="email">Ваш Email</label></h2>
        <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="example@example.com" id="email" name="email" value="{{old('email')}}">
        @error('email')
            <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
        @enderror
    </div>

    <div class="form-group w-50 mx-auto">
        <h2><label for="number">Ваш мобільний номер</label></h2>
        <input type="tel" class="form-control @error('number') is-invalid @enderror" placeholder="380 xx xxx xxxx" id="number" name="number" value="{{old('number')}}">
        @error('number')
        <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
        @enderror
    </div>

    <div class="form-group w-50 mx-auto">
        <h2><label for="password">Пароль</label></h2>
        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password">

        @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>



    <div class="form-group w-50 mx-auto">
        <h2><label for="password_confirmation">Підтвердіть пароль</label></h2>
        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
        <button type="submit" class="btn btn-primary mt-3">Зарєєструватись</button>
    </div>


</form>
