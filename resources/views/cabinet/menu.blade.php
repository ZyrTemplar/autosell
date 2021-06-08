<div class="col-auto">
    <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark ml-3 mt-3" style="width: 380px; border-radius: 30px; max-height: 400px; height: 100%">
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
            <li>
                <a href="#" class="nav-link my-1 text-white menu-li active-custom " id="my_auto" onclick="change_menu('my_auto')">
                    Мої авто
                </a>
            </li>
            <li>
                <a href="#" class="nav-link my-1 text-white menu-li" id="change" onclick="change_menu('change')">
                    Змінити дані
                </a>
            </li>
            @if(auth()->user()->email=='admin@admin')
                <li>
                    <a href="{{route('admin_autos')}}" class="nav-link my-1 text-white menu-li" id="change">
                        Адмін панель
                    </a>
                </li>
            @endif
            <li>
                <a href="/logout" class="nav-link my-1 text-white menu-li">
                    Вихід
                </a>
            </li>
        </ul>
        <hr>
    </div>
</div>
