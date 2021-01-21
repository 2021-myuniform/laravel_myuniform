@extends('layouts.mainCommon')

@section('mainCss')
<link rel="stylesheet" href="{{ asset('css/mainPage.css') }}">
@endsection

@section('mainJs')
<script src="{{ asset('js/mainPage.js') }}"></script>
@endsection

@include('layouts.header')

@include('layouts.headerList')

@include('layouts.selectWear')

@include('layouts.showItem')

@include('layouts.showPrice')
