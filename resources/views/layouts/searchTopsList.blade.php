@section('searchItemsList')


<div class="searchItemList">

    {{-- {{$topsItemsOutputs}} --}}

    <div class="searchListText">
        <p>Topsの条件に一致したアイテム</p>
    </div>
    @if ($topsItemsOutputs->isEmpty())
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
                   <p>{{$topsItemsOutput->jancode}}</p>
                   <p>{{$topsItemsOutput->adult}}</p>
                   <p>¥ {{number_format($topsItemsOutput->price)}}</p>
                   <p>{{$topsItemsOutput->brand}}</p>
                   <p>{{$topsItemsOutput->category}}</p>
                   <p>{{$topsItemsOutput->color}}</p>
                </li>
                <input type="submit" value="選択">
            </form>
        </div>
            @endforeach
    </div>
</div>

@endsection
