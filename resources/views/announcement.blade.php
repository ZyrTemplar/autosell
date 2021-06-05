@extends('layouts.layout')

@section('content')

@include('includes.header')

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
