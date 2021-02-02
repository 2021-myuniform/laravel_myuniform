@section('showPrice')

<div class="showPrice">

    @if (isset($getCapsImg))
    <div class="showPriceList">
        <p class="showPriceList_item">キャップ : {{$getCapsImg->brand}}</p>
        <p class="showPriceList_price">¥ {{number_format($getCapsImg->price)}}</p>
    </div>
    @endif

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

    @if (isset($getSocksImg))
    <div class="showPriceList">
        <p class="showPriceList_item">ソックス : {{$getSocksImg->brand}}</p>
        <p class="showPriceList_price">¥ {{number_format($getSocksImg->price)}}</p>
    </div>
    @endif

    @if (isset($getShoesImg))
        <div class="showPriceList">
            <p class="showPriceList_item">シューズ : {{$getShoesImg->brand}}</p>
            <p class="showPriceList_price">¥ {{number_format($getShoesImg->price)}}</p>
        </div>
    @endif

    @if (isset($getTopsImg->price) || isset($getPantsImg->price) || isset($getShoesImg->price) || isset($getCapsImg->price) || isset($getSocksImg->price))
        <div class="showPriceList">
            <p class="showPriceList_item">合計金額</p>
            <p class="showPriceList_price">¥
                @if(isset($getTopsImg->price) && isset($getPantsImg->price) && isset($getShoesImg->price) && isset($getCapsImg->price) && isset($getSocksImg->price))
                {{number_format($getTopsImg->price + $getPantsImg->price + $getShoesImg->price + $getCapsImg->price + $getSocksImg->price)}}
                @elseif(isset($getTopsImg->price) && isset($getPantsImg->price) && isset($getShoesImg->price) && isset($getCapsImg->price))
                {{number_format($getTopsImg->price + $getPantsImg->price + $getShoesImg->price + $getCapsImg->price)}}
                @elseif(isset($getTopsImg->price) && isset($getPantsImg->price) && isset($getShoesImg->price))
                {{number_format($getTopsImg->price + $getPantsImg->price + $getShoesImg->price)}}
                @elseif(isset($getTopsImg->price) && isset($getPantsImg->price))
                {{number_format($getTopsImg->price + $getPantsImg->price)}}
                @elseif(isset($getTopsImg->price) && isset($getShoesImg->price))
                {{number_format($getTopsImg->price + $getShoesImg->price)}}
                @elseif(isset($getPantsImg->price) && isset($getShoesImg->price))
                {{number_format($getPantsImg->price + $getShoesImg->price)}}
                @elseif (isset($getTopsImg->price))
                {{number_format($getTopsImg->price)}}
                @elseif (isset($getPantsImg->price))
                {{number_format($getPantsImg->price)}}
                @elseif (isset($getShoesImg->price))
                {{number_format($getShoesImg->price)}}
                @elseif (isset($getCapsImg->price))
                {{number_format($getCapsImg->price)}}
                @elseif (isset($getSocksImg->price))
                {{number_format($getSocksImg->price)}}
                @endif
        </div>
    @endif
</div>

@endsection