@section('searchItemsList')


<div class="searchItemList">



    {{-- {{$topsItemsOutputs}} --}}

    <p>Shoesの条件に一致したアイテム</p>
    @if ($shoesItemsOutputs->isEmpty())
        <p>条件にあったアイテムはありませんでした。</p>
    @endif
    <div class="searchItemList_container">
        @foreach ($shoesItemsOutputs as $shoesItemsOutput)
        <div>
            <form action="{{ route('sendShoes') }}" method="post">
                @csrf
                <li>
                   <p>{{$shoesItemsOutput->id}}</p>
                   <input type="hidden" name="shoesItemsOutputId" value="{{$shoesItemsOutput->id}}">
                   <p>{{$shoesItemsOutput->jancode}}</p>
                   <p>{{$shoesItemsOutput->adult}}</p>
                   <p>{{$shoesItemsOutput->price}}</p>
                   <p>{{$shoesItemsOutput->brand}}</p>
                   <p>{{$shoesItemsOutput->category}}</p>
                   <p>{{$shoesItemsOutput->color}}</p>
                </li>
                <input type="submit" value="選ぶ">
            </form>
        </div>
            @endforeach
    </div>
</div>

@endsection
