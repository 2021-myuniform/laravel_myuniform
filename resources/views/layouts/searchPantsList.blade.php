@section('searchItemsList')


<div class="searchItemList">



    {{-- {{$topsItemsOutputs}} --}}

    <div class="searchListText">
        <p>Pantsの条件に一致したアイテム</p>
    </div>
    @if ($pantsItemsOutputs->isEmpty())
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
                   <p>{{$pantsItemsOutput->jancode}}</p>
                   <p>{{$pantsItemsOutput->adult}}</p>
                   <p>¥ {{number_format($pantsItemsOutput->price)}}</p>
                   <p>{{$pantsItemsOutput->brand}}</p>
                   <p>{{$pantsItemsOutput->category}}</p>
                   <p>{{$pantsItemsOutput->color}}</p>
                </li>
                <input type="submit" value="選択">
            </form>
        </div>
            @endforeach
    </div>
</div>

@endsection
