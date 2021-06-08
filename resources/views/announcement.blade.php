@extends('layouts.layout')

@section('content')

@include('includes.header')

@if($errors->any())
    <div class="alert alert-danger col-3 mx-auto">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif

@include('includes.announcement_includes.price_and_buy')

@include('includes.announcement_includes.okno')

@include('includes.announcement_includes.specifications')

@include('includes.announcement_includes.more')

@if(\Illuminate\Support\Facades\Auth::check())

    @if(auth()->user()->id==$about_car['seller_id'])

        @include('includes.announcement_includes.table')

    @endif

@endif

@include('includes.footer')

@endsection


