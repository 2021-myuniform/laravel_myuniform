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
</head>
<body>

    @yield('header')
    @yield('headerList')

    <div class="showWearItem">
        @yield('selectWear')

        @yield('showItem')

        @yield('showPrice')
    </div>


    @yield('footer')

    @yield('mainJs')

</body>
</html>