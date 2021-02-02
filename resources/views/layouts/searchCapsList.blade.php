@section('searchItemsList')


<div class="searchItemList">


    <div class="searchListText">
        {{-- <p>Shoesの条件に一致したアイテム</p> --}}
        <p>Caps : <span class="textRed">【COLOR】</span> {{$getCapsSet->color}} <span class="textRed">【BRAND】</span>{{$getCapsSet->brand}}</p>
    </div>
    @if ($capsItemsOutputs->isEmpty())
        <div class="searchListText">
            <p>条件にあったアイテムはありませんでした。</p>
        </div>
    @endif
    <div class="searchItemList_container">
        @foreach ($capsItemsOutputs as $capsItemsOutput)
        <div class="searchItemList_box">
            <form action="{{ route('sendCaps') }}" method="post">
                @csrf
                <li>
                   {{-- <p>{{$shoesItemsOutput->id}}</p> --}}
                   <input type="hidden" name="capsItemsOutputId" value="{{$capsItemsOutput->id}}">
                   <img class="searchItemShow" src="{{ asset('img/img_caps/' . $capsItemsOutput->img) }}" alt="{{$capsItemsOutput->img}}">
                   <p class="searchItemName">{{$capsItemsOutput->jancode}}</p>
                   <p class="searchItemPrice">¥ {{number_format($capsItemsOutput->price)}}</p>
                   {{-- <p>{{$shoesItemsOutput->adult}}</p> --}}
                   {{-- <p>{{$shoesItemsOutput->brand}}</p>
                   <p>{{$shoesItemsOutput->category}}</p>
                   <p>{{$shoesItemsOutput->color}}</p> --}}
                </li>
                <input type="submit" value="選択">
            </form>
        </div>
            @endforeach
    </div>
</div>

@endsection
