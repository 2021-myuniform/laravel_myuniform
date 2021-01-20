@section('searchTopsList')


<div class="searchItemList">

    {{-- {{$topsItemsOutputs}} --}}

    <p>Topsの条件に一致したアイテム</p>
    @if ($topsItemsOutputs->isEmpty())
        <p>条件にあったアイテムはありませんでした。</p>
    @endif
    <div class="searchItemList_container">
        @foreach ($topsItemsOutputs as $topsItemsOutput)
        <div>
            <form action="{{ route('sendTops') }}" method="post">
                @csrf
                <li>
                   <p>{{$topsItemsOutput->id}}</p>
                   <input type="hidden" name="topsItemsOutputId" value="{{$topsItemsOutput->id}}">
                   <p>{{$topsItemsOutput->jancode}}</p>
                   <p>{{$topsItemsOutput->adult}}</p>
                   <p>{{$topsItemsOutput->price}}</p>
                   <p>{{$topsItemsOutput->brand}}</p>
                   <p>{{$topsItemsOutput->category}}</p>
                   <p>{{$topsItemsOutput->color}}</p>
                </li>
                <input type="submit" value="選ぶ">
            </form>
        </div>
            @endforeach
    </div>
</div>

@endsection
