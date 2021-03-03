@section('searchItemsList')


<div class="searchItemList">

    {{-- {{$topsItemsOutputs}} --}}

    <div class="searchListText">
        {{-- <p>Topsの条件に一致したアイテム</p> --}}
        <p>Tops : <span class="textRed">【COLOR】</span> {{$getTopsSet->color}} <span class="textRed">【BRAND】</span>{{$getTopsSet->brand}} <span class="textRed">【CATEGORY】</span>{{$getTopsSet->category}}</p>
    </div>
    @if ($topsItemsOutputs->isEmpty() && empty($rakutenLists))
    <div class="searchListText">
        <p>条件にあったアイテムはありませんでした。</p>
    </div>
    @endif
    <div class="searchItemList_container">
        @foreach ($topsItemsOutputs as $topsItemsOutput)
        <div class="searchItemList_box">
            <form action="{{ route('sendTops') }}" method="post">
                @csrf
                <li>
                   {{-- <p>{{$topsItemsOutput->id}}</p> --}}
                   <input type="hidden" name="topsItemsOutputId" value="{{$topsItemsOutput->id}}">
                   <img class="searchItemShow" src="{{ asset('img/img_tops/' . $topsItemsOutput->img) }}" alt="{{$topsItemsOutput->img}}">
                   <p class="searchItemName">{{$topsItemsOutput->jancode}}</p>
                   <p class="searchItemPrice">¥ {{number_format($topsItemsOutput->price)}}</p>
                   {{-- <p>{{$topsItemsOutput->brand}}</p>
                   <p>{{$topsItemsOutput->category}}</p>
                   <p>{{$topsItemsOutput->color}}</p> --}}
                </li>
                <input type="submit" value="選択">
            </form>
        </div>
            @endforeach

            @foreach ($rakutenLists as $rakutenList)
            @foreach ($rakutenList as $rakutenListItem)
            <div class="searchItemList_box">
                <form action="{{ route('sendTops') }}" method="post">
                    @csrf
                    <li>
                       <input type="hidden" name="topsItemsOutputId" value="{{$rakutenListItem["itemCode"]}}">
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
