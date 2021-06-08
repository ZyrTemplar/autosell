@extends('layouts.layout')

@section('content')

@include('includes.header')

@include('includes.mini_search')

@include('includes.carList')

@include('includes.footer')

@endsection

@section('custom_scripts')

    <script>
        $('#rozm').click (function () {
            let fuel=$('#fuel').val();
            let old=$('#old').val();
            let price=$('#price').val();
            let objem=$('#objem').val();
            let vartist=0;
            if(fuel==='benz' && objem<=3000) vartist=vartist+50;
            if(fuel==='benz' && objem>3000) vartist=vartist+100;
            if(fuel==='dizel' && objem<=3500) vartist=vartist+75;
            if(fuel==='dizel' && objem>3500) vartist=vartist+150;
            console.log([fuel, old, price, objem])
        })
    </script>

@endsection
