<form action="/login" method="POST" class="mt-10 mb-10 pl-5 col ">
    @csrf
    <div class="slogan text-center">Вхід</div>

    <div class="form-group w-50 mx-auto">
        @if(session('error'))
            <div class="alert alert-danger ">
                {{session('error')}}
            </div>
        @endif
        <h2><label for="login_email">Email</label></h2>
        <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="example@example.com" id="login_email" name="email" value="{{old('email')}}">
        @error('email')
        <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="form-group w-50 mx-auto mt-3">
        <h2><label for="password">Пароль</label></h2>
        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password">
        @error('password')
        <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
        </span>
        @enderror
        <button type="submit" class="btn btn-primary mt-3">Увійти</button>
        <a class="btn btn-secondary mt-3 ml-4" href="/register">Реєстрація</a>
    </div>


</form>
