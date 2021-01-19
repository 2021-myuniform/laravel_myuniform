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
        <div style="display: flex; background-color: lightblue">
            <div>
                <a href="{{ route('selectPants') }}">Pantsを選ぶ</a>
                <p>カラー:{{$getPantsSet->color}}</p>
                <p>ブランド:{{$getPantsSet->brand}}</p>
                <p>対象:{{$getPantsSet->gender}}</p>
            </div>
            <div>
                <a href="{{ route('selectTops') }}">Topsを選ぶ</a>
                <p>カラー:{{$getTopsSet->color}}</p>
                <p>ブランド:{{$getTopsSet->brand}}</p>
                <p>対象:{{$getTopsSet->gender}}</p>
            </div>
            <div>
                <a href="{{ route('selectShoes') }}">Shoesを選ぶ</a>
                <p>カラー:{{$getShoesSet->color}}</p>
                <p>ブランド:{{$getShoesSet->brand}}</p>
                <p>対象:{{$getShoesSet->gender}}</p>
            </div>
        </div>
    </div>
    <div>
        @if (isset($userInfo))
        <p>ユーザーのお気に入りPants</p>
        <p>{{$userInfo->favPants}}</p>
        @if (isset($getPantsImg))
        <img src="{{ asset('img/img_pants/' . $getPantsImg->img) }}" alt="{{$getPantsImg->img}}">
        @endif
        @endif
    </div>
    <div>
        @if (isset($userInfo))
        <p>ユーザーのお気に入りTops</p>
        <p>{{$userInfo->favTops}}</p>
        @if (isset($getTopsImg))
        <img src="{{ asset('img/img_tops/' . $getTopsImg->img) }}" alt="{{$getTopsImg->img}}">
        @endif
        @endif
    </div>
    <div>
        @if (isset($userInfo))
        <p>ユーザーのお気に入りTops</p>
        <p>{{$userInfo->favShoes}}</p>
        @if (isset($getShoesImg))
        <img src="{{ asset('img/img_shoes/' . $getShoesImg->img) }}" alt="{{$getShoesImg->img}}">
        @endif
        @endif
    </div>


</body>
</html>
