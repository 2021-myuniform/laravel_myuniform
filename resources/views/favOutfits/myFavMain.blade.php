@extends('layouts.favCommon')

@section('mainCss')
<link rel="stylesheet" href="{{ asset('css/mainPage.css') }}">
<link rel="stylesheet" href="{{ asset('css/favList.css') }}">
@endsection

@section('mainJs')
<script src="{{ asset('js/mainPage.js') }}"></script>
@endsection

@include('layouts.header')

@include('layouts.headerList')

@include('favOutfits.myFavOutfits')

