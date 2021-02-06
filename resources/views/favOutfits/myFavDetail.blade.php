@extends('layouts.detailCommon')

@section('mainCss')
<link rel="stylesheet" href="{{ asset('css/mainPage.css') }}">
<link rel="stylesheet" href="{{ asset('css/favList.css') }}">
@endsection

@section('mainJs')
<script src="{{ asset('js/mainPage.js') }}"></script>
@endsection

@include('layouts.header')

<div>
    @include('favOutfits.myFavMyDetail')

    @include('layouts.showPrice')

    @include('favOutfits.description')
</div>


