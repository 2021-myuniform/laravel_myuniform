@section('showPrice')

<div class="showPrice">

    @if (isset($getTopsImg))
        <div class="showPriceList">
            <p class="showPriceList_item">トップス : {{$getTopsImg->brand}}</p>
            <p class="showPriceList_price">¥ {{number_format($getTopsImg->price)}}</p>
        </div>
    @endif

    @if (isset($getPantsImg))
        <div class="showPriceList">
            <p class="showPriceList_item">パンツ : {{$getPantsImg->brand}}</p>
            <p class="showPriceList_price">¥ {{number_format($getPantsImg->price)}}</p>
        </div>
    @endif

    @if (isset($getShoesImg))
        <div class="showPriceList">
            <p class="showPriceList_item">シューズ : {{$getShoesImg->brand}}</p>
            <p class="showPriceList_price">¥ {{number_format($getShoesImg->price)}}</p>
        </div>
    @endif

    @if (isset($getTopsImg))
        <div class="showPriceList">
            <p class="showPriceList_item">合計金額</p>
            <p class="showPriceList_price">¥ {{number_format($getTopsImg->price + $getPantsImg->price + $getShoesImg->price)}}</p>
        </div>
    @endif

    {{-- {{$getShoesImg->price + $getTopsImg->price}} --}}

    {{-- @foreach ($getTopsImg as $item)
        <p>{{$item}}</p>
    @endforeach --}}
</div>

@endsection