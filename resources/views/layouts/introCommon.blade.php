<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    @yield('mainCss')
</head>
<body>

    @yield('header')

    @yield('introduction')

    @yield('footer')

</body>
</html>