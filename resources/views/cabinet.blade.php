@extends('layouts.layout')

@section('content')
    @include('includes.header')

    <div class="row">
        @include('cabinet.menu')
        @include('cabinet.configs')
    </div>
    @include('includes.footer')
@endsection
