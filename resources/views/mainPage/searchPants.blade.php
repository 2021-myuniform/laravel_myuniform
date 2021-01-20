@extends('layouts.selectCommon')

@section('mainCss')
<link rel="stylesheet" href="{{ asset('css/mainPage.css') }}">
@endsection

@include('layouts.header')

@include('layouts.selectWear')

@include('layouts.showItem')

@include('layouts.searchPantsList')
