@extends('layouts.layout')

@section('content')

    @include('includes.header')

    <div class="container-fluid">
        <div class="row">
            <div class="col d-flex flex-column flex-shrink-0 p-3 text-white bg-dark ml-3 mt-3" style="width: 380px; border-radius: 30px; height: 100%">
                <hr>
                <ul class="nav nav-pills flex-column pb-2 mb-auto">
                    <li class="nav-item">
                        <a href="{{route('admin_autos')}}" class="nav-link my-1 active-custom text-white menu-li" id="chosen" aria-current="page">
                            Автомобілі
                        </a>
                    </li>
                    <li>
                        <a href="{{route('admin_users')}}" class="nav-link my-1 text-white menu-li" id="my_auto">
                            Користувачі
                        </a>
                    </li>
                </ul>
            </div>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                <h2 class="mt-3">Список автомобілів</h2>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-sm">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Бренд</th>
                            <th>Модель</th>
                            <th>Ціна</th>
                            <th>Створена користувачем</th>
                            <th>Видалення</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($autos as $value)
                        <tr>
                            <td>{{$value->id}}</td>
                            <td>{{$value->brand}}</td>
                            <td>{{$value->model}}</td>
                            <td>{{$value->price}}$</td>
                            @foreach($users as $user)
                                @if($user->id==$value->seller_id)
                                    <td>{{$user->name}}</td>
                                @endif
                            @endforeach
                            <td>
                                <form class="text-center" action="{{route('auto.destroy',['auto'=>$value->id])}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class=" btn btn-danger" style="color: black">Видалити</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </main>
        </div>
    </div>

    @include('includes.footer')

@endsection


