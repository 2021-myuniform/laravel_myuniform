@section('searchItemsList')


<div class="searchItemList">



    {{-- {{$topsItemsOutputs}} --}}

    <p>Pantsの条件に一致したアイテム</p>
    @if ($pantsItemsOutputs->isEmpty())
        <p>条件にあったアイテムはありませんでした。</p>
    @endif
    <div class="searchItemList_container">
        @foreach ($pantsItemsOutputs as $pantsItemsOutput)
        <div>
            <form action="{{ route('sendPants') }}" method="post">
                @csrf
                <li>
                   <p>{{$pantsItemsOutput->id}}</p>
                   <input type="hidden" name="pantsItemsOutputId" value="{{$pantsItemsOutput->id}}">
                   <p>{{$pantsItemsOutput->jancode}}</p>
                   <p>{{$pantsItemsOutput->adult}}</p>
                   <p>{{$pantsItemsOutput->price}}</p>
                   <p>{{$pantsItemsOutput->brand}}</p>
                   <p>{{$pantsItemsOutput->category}}</p>
                   <p>{{$pantsItemsOutput->color}}</p>
                </li>
                <input type="submit" value="選ぶ">
            </form>
        </div>
            @endforeach
    </div>
</div>

@endsection
