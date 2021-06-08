
<header class="d-flex flex-column flex-md-row align-items-center bg-body shadow-sm bg-dark">
<a href="/" class="ml-4 mr-auto my-1"><img src="{{asset('/img/logo.png')}}" alt="Name" width="190px"></a>
    <p class="slogan text-white mr-auto align-center my-md-0 me-md-3">Місце під рекламу</p>
    @auth()
    <a class="btn btn-danger btn-lg mr-3" href="/auto/create" >Продати авто</a>
    @endauth
    @guest()
        <a class="btn btn-success btn-lg mr-3" href="/userlogin" >Авторизація</a>
    @endguest
    @auth()
        <a class="btn btn-success btn-lg mr-3" href="/cabinet" >Мій кабінет</a>
    @endauth
</header>

