@section('searchItemsList')


<div class="searchItemList">



    {{-- {{$topsItemsOutputs}} --}}

    <div class="searchListText">
        {{-- <p>Pantsの条件に一致したアイテム</p> --}}
        <p>Pants : <span class="textRed">【COLOR】</span> {{$getPantsSet->color}} <span class="textRed">【BRAND】</span>{{$getPantsSet->brand}} <span class="textRed">【CATEGORY】</span>{{$getPantsSet->category}}</p>
    </div>
    @if ($pantsItemsOutputs->isEmpty() && empty($rakutenLists))
    <div class="searchListText">
        <p>条件にあったアイテムはありませんでした。</p>
    </div>
    @endif
    <div class="searchItemList_container">
        @foreach ($pantsItemsOutputs as $pantsItemsOutput)
        <div class="searchItemList_box">
            <form action="{{ route('sendPants') }}" method="post">
                @csrf
                <li>
                   {{-- <p>{{$pantsItemsOutput->id}}</p> --}}
                   <input type="hidden" name="pantsItemsOutputId" value="{{$pantsItemsOutput->id}}">
                   <img class="searchItemShow" src="{{ asset('img/img_pants/' . $pantsItemsOutput->img) }}" alt="{{$pantsItemsOutput->img}}">
                   <p class="searchItemName">{{$pantsItemsOutput->jancode}}</p>
                   <p class="searchItemPrice">¥ {{number_format($pantsItemsOutput->price)}}</p>
                   {{-- <p>{{$pantsItemsOutput->adult}}</p> --}}
                   {{-- <p>{{$pantsItemsOutput->brand}}</p>
                   <p>{{$pantsItemsOutput->category}}</p>
                   <p>{{$pantsItemsOutput->color}}</p> --}}
                </li>
                <input type="submit" value="選択">
            </form>
        </div>
        @endforeach

        @foreach ($rakutenLists as $rakutenList)
        @foreach ($rakutenList as $rakutenListItem)
        <div class="searchItemList_box">
            <form action="{{ route('sendPants') }}" method="post">
                @csrf
                <li>
                   <input type="hidden" name="pantsItemsOutputId" value="{{$rakutenListItem["itemCode"]}}">
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
