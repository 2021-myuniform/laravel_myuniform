@section('searchItemsList')


<div class="searchItemList">


    <div class="searchListText">
        <p>Socks : <span class="textRed">【COLOR】</span> {{$getSocksSet->color}} <span class="textRed">【BRAND】</span>{{$getSocksSet->brand}} <span class="textRed">【CATEGORY】</span>{{$getSocksSet->category}}</p>
    </div>
    @if ($socksItemsOutputs->isEmpty() && empty($rakutenLists))
        <div class="searchListText">
            <p>条件にあったアイテムはありませんでした。</p>
        </div>
    @endif
    <div class="searchItemList_container">
        @foreach ($socksItemsOutputs as $socksItemsOutput)
        <div class="searchItemList_box">
            <form action="{{ route('sendSocks') }}" method="post">
                @csrf
                <li>
                   {{-- <p>{{$shoesItemsOutput->id}}</p> --}}
                   <input type="hidden" name="socksItemsOutputId" value="{{$socksItemsOutput->id}}">
                   <img class="searchItemShow" src="{{ asset('img/img_socks/' . $socksItemsOutput->img) }}" alt="{{$socksItemsOutput->img}}">
                   <p class="searchItemName">{{$socksItemsOutput->jancode}}</p>
                   <p class="searchItemPrice">¥ {{number_format($socksItemsOutput->price)}}</p>
                </li>
                <input type="submit" value="選択">
            </form>
        </div>
            @endforeach

            @foreach ($rakutenLists as $rakutenList)
            @foreach ($rakutenList as $rakutenListItem)
            <div class="searchItemList_box">
                <form action="{{ route('sendSocks') }}" method="post">
                    @csrf
                    <li>
                       <input type="hidden" name="socksItemsOutputId" value="{{$rakutenListItem["itemCode"]}}">
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
