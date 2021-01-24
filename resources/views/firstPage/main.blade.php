@extends('layouts.firstCommon')

@section('mainCss')
<link rel="stylesheet" href="{{ asset('css/mainPage.css') }}">
<link rel="stylesheet" href="{{ asset('css/firstPage.css') }}">
@endsection

@section('mainJs')
<script src="{{ asset('js/firstPage.js') }}"></script>
@endsection

@include('layouts.header')

@include('firstPage.mainLP')

