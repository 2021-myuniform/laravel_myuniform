@section('selectWear')

<div>
    <div>ここに画像を表示</div>
    <div style="display: flex; background-color: lightblue">
        <div>
            <a href="{{ route('selectTops') }}">Topsを選ぶ</a>
            <p>カラー:{{$getTopsSet->color}}</p>
            <p>ブランド:{{$getTopsSet->brand}}</p>
            <p>対象:{{$getTopsSet->gender}}</p>
        </div>
        <div>
            <a href="{{ route('selectPants') }}">Pantsを選ぶ</a>
            <p>カラー:{{$getPantsSet->color}}</p>
            <p>ブランド:{{$getPantsSet->brand}}</p>
            <p>対象:{{$getPantsSet->gender}}</p>
        </div>
        <div>
            <a href="{{ route('selectShoes') }}">Shoesを選ぶ</a>
            <p>カラー:{{$getShoesSet->color}}</p>
            <p>ブランド:{{$getShoesSet->brand}}</p>
            <p>対象:{{$getShoesSet->gender}}</p>
        </div>
    </div>
</div>

@endsection