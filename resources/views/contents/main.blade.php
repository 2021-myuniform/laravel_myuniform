<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>メインページ</p>

    <div>
        <a href="{{ route('searchPants') }}">条件検索</a>
        <a href="{{ route('dashboard') }}">ダッシュボード</a>
        <a href="{{ route('yourlist') }}">あなたの好みのアイテム一覧</a>
    </div>
    <div>
        <div>ここに画像を表示</div>
        <div>
            <a href="{{ route('selectPants') }}">Pantsを選ぶ</a>
            <a href="">Topsを選ぶ</a>
            <a href="">Shoesを選ぶ</a>
        </div>
    </div>
    <div>
        @if (isset($selectPants))
        <div style="background-color: gray">
            <p>ここはPantsの番号</p>
            <p>{{$selectPants}}</p>
        </div>
        @endif
    </div>
</body>
</html>
