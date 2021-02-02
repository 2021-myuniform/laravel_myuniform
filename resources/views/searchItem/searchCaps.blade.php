@extends('layouts.searchCommon')

@section('mainCss')
<link rel="stylesheet" href="{{ asset('css/mainPage.css') }}">
<link rel="stylesheet" href="{{ asset('css/searchPage.css') }}">
@endsection

@include('layouts.header')

@include('layouts.searchCaps')