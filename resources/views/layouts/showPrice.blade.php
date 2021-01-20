@section('showPrice')

<div>

    <div>
        <p>トップス:{{$getTopsImg->brand}}</p>
        <p>{{$getTopsImg->price}}円</p>
    </div>

    <div>
        <p>パンツ:{{$getPantsImg->brand}}</p>
        <p>{{$getPantsImg->price}}円</p>
    </div>

    <div>
        <p>シューズ:{{$getShoesImg->brand}}</p>
        <p>{{$getShoesImg->price}}円</p>
    </div>

    <div>
        <p>合計金額</p>
        <p>{{$getShoesImg->price + $getTopsImg->price}}円</p>
    </div>

    {{-- {{$getShoesImg->price + $getTopsImg->price}} --}}

    {{-- @foreach ($getTopsImg as $item)
        <p>{{$item}}</p>
    @endforeach --}}
</div>

@endsection