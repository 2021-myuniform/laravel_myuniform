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
            <a href="{{ route('selectTops') }}">Topsを選ぶ</a>
            <a href="{{ route('selectShoes') }}">Shoesを選ぶ</a>
        </div>
    </div>
    <div>
        @if (isset($userInfo))
        <p>ユーザーのお気に入りPants</p>
        <p>{{$userInfo->favPants}}</p>
        @endif
    </div>
    <div>
        @if (isset($userInfo))
        <p>ユーザーのお気に入りTops</p>
        <p>{{$userInfo->favTops}}</p>
        @endif
    </div>
    <div>
        @if (isset($userInfo))
        <p>ユーザーのお気に入りTops</p>
        <p>{{$userInfo->favShoes}}</p>
        @endif
    </div>
</body>
</html>
