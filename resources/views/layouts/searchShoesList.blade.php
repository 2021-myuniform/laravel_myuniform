@section('searchItemsList')


<div class="searchItemList">



    {{-- {{$topsItemsOutputs}} --}}

    <div class="searchListText">
        <p>Shoesの条件に一致したアイテム</p>
    </div>
    @if ($shoesItemsOutputs->isEmpty())
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
                   <p>{{$shoesItemsOutput->jancode}}</p>
                   <p>{{$shoesItemsOutput->adult}}</p>
                   <p>¥ {{number_format($shoesItemsOutput->price)}}</p>
                   <p>{{$shoesItemsOutput->brand}}</p>
                   <p>{{$shoesItemsOutput->category}}</p>
                   <p>{{$shoesItemsOutput->color}}</p>
                </li>
                <input type="submit" value="選択">
            </form>
        </div>
            @endforeach
    </div>
</div>

@endsection
