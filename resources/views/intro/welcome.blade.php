@extends('layouts.introCommon')

@section('mainCss')
<link rel="stylesheet" href="{{ asset('css/mainPage.css') }}">
<link rel="stylesheet" href="{{ asset('css/introPage.css') }}">
@endsection

@include('layouts.header')

@include('layouts.welcomeNewUser')