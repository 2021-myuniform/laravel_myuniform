<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    @yield('mainCss')
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700;900&family=Noto+Sans+JP:wght@100;400;700;900&display=swap" rel="stylesheet">

    <!-- Remember to include jQuery :) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>

    <!-- jQuery Modal -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />

</head>
<body>

    @yield('header')
    @yield('headerList')

    <div class="showWearItem">
        @yield('selectWear')

        @yield('showItem')

        @yield('showPrice')

    </div>
    <div>
        <form action="{{ route('saveFav') }}" method="post">
            @csrf

            <input type="hidden" name="favTops" value="{{$userInfo->favTops}}">
            <input type="hidden" name="favPants" value="{{$userInfo->favPants}}">
            <input type="hidden" name="favShoes" value="{{$userInfo->favShoes}}">

            <input type="submit" value="お気に入り登録">
        </form>
    </div>


    @yield('footer')

    @yield('mainJs')

</body>
</html>