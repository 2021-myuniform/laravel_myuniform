@section('showPrice')

<div>

    @if (isset($getTopsImg))
        <div>
            <p>トップス:{{$getTopsImg->brand}}</p>
            <p>{{$getTopsImg->price}}円</p>
        </div>
    @endif

    @if (isset($getPantsImg))
        <div>
            <p>パンツ:{{$getPantsImg->brand}}</p>
            <p>{{$getPantsImg->price}}円</p>
        </div>
    @endif

    @if (isset($getShoesImg))
        <div>
            <p>シューズ:{{$getShoesImg->brand}}</p>
            <p>{{$getShoesImg->price}}円</p>
        </div>
    @endif

    @if (isset($getTopsImg))
        <div>
            <p>合計金額</p>
            <p>{{$getTopsImg->price + $getPantsImg->price + $getShoesImg->price}}円</p>
        </div>
    @endif

    {{-- {{$getShoesImg->price + $getTopsImg->price}} --}}

    {{-- @foreach ($getTopsImg as $item)
        <p>{{$item}}</p>
    @endforeach --}}
</div>

@endsection