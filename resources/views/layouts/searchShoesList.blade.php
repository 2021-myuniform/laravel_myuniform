@section('searchItemsList')


<div class="searchItemList">



    {{-- {{$topsItemsOutputs}} --}}

    <div class="searchListText">
        {{-- <p>Shoesの条件に一致したアイテム</p> --}}
        <p>Shoes : <span class="textRed">【COLOR】</span> {{$getShoesSet->color}} <span class="textRed">【BRAND】</span>{{$getShoesSet->brand}} <span class="textRed">【CATEGORY】</span>{{$getShoesSet->category}}</p>
    </div>
    @if ($shoesItemsOutputs->isEmpty() && empty($rakutenLists['items']))
        <div class="searchListText">
            <p>条件にあったアイテムはありませんでした。</p>
        </div>
    @endif
    <div class="searchItemList_container">
        @foreach ($shoesItemsOutputs as $shoesItemsOutput)
        <div class="searchItemList_box">
            <form action="{{ route('sendShoes') }}" method="post">
                @csrf
                <li>
                   {{-- <p>{{$shoesItemsOutput->id}}</p> --}}
                   <input type="hidden" name="shoesItemsOutputId" value="{{$shoesItemsOutput->id}}">
                   <img class="searchItemShow" src="{{ asset('img/img_shoes/' . $shoesItemsOutput->img) }}" alt="{{$shoesItemsOutput->img}}">
                   <p class="searchItemName">{{$shoesItemsOutput->jancode}}</p>
                   <p class="searchItemPrice">¥ {{number_format($shoesItemsOutput->price)}}</p>
                   {{-- <p>{{$shoesItemsOutput->adult}}</p> --}}
                   {{-- <p>{{$shoesItemsOutput->brand}}</p>
                   <p>{{$shoesItemsOutput->category}}</p>
                   <p>{{$shoesItemsOutput->color}}</p> --}}
                </li>
                <input type="submit" value="選択">
            </form>
        </div>
            @endforeach

            @foreach ($rakutenLists as $rakutenList)
            @foreach ($rakutenList as $rakutenListItem)
            <div class="searchItemList_box">
                <form action="{{ route('sendShoes') }}" method="post">
                    @csrf
                    <li>
                       <input type="hidden" name="shoesItemsOutputId" value="{{$rakutenListItem["itemCode"]}}">
                       <input type="hidden" value="{{$rakutenListItem["itemUrl"]}}">
                       <img class="searchItemShow" src="{{ asset($rakutenListItem["mediumImageUrls"]) }}" alt="{{$rakutenListItem["mediumImageUrls"]}}">
                       <p class="searchItemName">{{$rakutenListItem["itemName"]}}</p>
                       <p class="searchItemPrice">¥ {{number_format($rakutenListItem["itemPrice"])}}</p>
                    </li>
                    <input type="submit" value="選択">
                </form>
            </div>
            @endforeach
            @endforeach
    </div>
</div>

@endsection
