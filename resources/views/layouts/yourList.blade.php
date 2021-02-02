@section('searchItemName')

<div>
    <ul class="currentPositionList">
        <li class="currentPositionList_item"><div class="positionCircle"></div><div class="currentPositionText">基本情報</div></li>
        <li class="currentPositionList_item"><div class="positionCircle"></div><div class="currentPositionText">スポーツ</div></li>
        <li class="currentPositionList_item"><div class="positionCircle"></div><div class="currentPositionText">ウェア条件</div></li>
        <li class="currentPositionList_item"><div class="positionCircle currentPositionChecked"></div><div class="currentPositionText">確認</div></li>
    </ul>
</div>

<div class="ask">
    <p>あなたの好みの条件にあったリストです</p>
</div>

<div class="itemList">
    <p>Topsの条件に一致したアイテム</p>
    @if ($topsItemsOutputs->isEmpty())
        <p>条件にあったアイテムはありませんでした。</p>
    @endif
    @foreach ($topsItemsOutputs as $topsItemsOutput)
     <li>
        <p>{{$topsItemsOutput->id}}</p>
        <p>{{$topsItemsOutput->jancode}}</p>
        <p>{{$topsItemsOutput->adult}}</p>
        <p>{{$topsItemsOutput->price}}</p>
        <p>{{$topsItemsOutput->brand}}</p>
        <p>{{$topsItemsOutput->category}}</p>
        <p>{{$topsItemsOutput->color}}</p>
     </li>
    @endforeach
</div>

<div class="itemList">
    <p>Pantsの条件に一致したアイテム</p>
    @if ($pantsItemsOutputs->isEmpty())
        <p>条件にあったアイテムはありませんでした。</p>
    @endif
    @foreach ($pantsItemsOutputs as $pantsItemsOutput)
     <li>
        <p>{{$pantsItemsOutput->id}}</p>
        <p>{{$pantsItemsOutput->jancode}}</p>
        <p>{{$pantsItemsOutput->adult}}</p>
        <p>{{$pantsItemsOutput->price}}</p>
        <p>{{$pantsItemsOutput->brand}}</p>
        <p>{{$pantsItemsOutput->category}}</p>
        <p>{{$pantsItemsOutput->color}}</p>
     </li>
    @endforeach
</div>

<div class="itemList">
    <p>Shoesの条件に一致したアイテム</p>
    @if ($shoesItemsOutputs->isEmpty())
        <p>条件にあったアイテムはありませんでした。</p>
    @endif
    @foreach ($shoesItemsOutputs as $shoesItemsOutput)
     <li>
        <p>{{$shoesItemsOutput->id}}</p>
        <p>{{$shoesItemsOutput->jancode}}</p>
        <p>{{$shoesItemsOutput->adult}}</p>
        <p>{{$shoesItemsOutput->price}}</p>
        <p>{{$shoesItemsOutput->brand}}</p>
        <p>{{$shoesItemsOutput->category}}</p>
        <p>{{$shoesItemsOutput->color}}</p>
     </li>
    @endforeach
</div>

<div class="itemList">
    <p>Capsの条件に一致したアイテム</p>
    @if ($capsItemsOutputs->isEmpty())
        <p>条件にあったアイテムはありませんでした。</p>
    @endif
    @foreach ($capsItemsOutputs as $capsItemsOutput)
     <li>
        <p>{{$capsItemsOutput->id}}</p>
        <p>{{$capsItemsOutput->jancode}}</p>
        <p>{{$capsItemsOutput->price}}</p>
        <p>{{$capsItemsOutput->brand}}</p>
        <p>{{$capsItemsOutput->color}}</p>
     </li>
    @endforeach
</div>

<div class="itemList">
    <p>Socksの条件に一致したアイテム</p>
    @if ($capsItemsOutputs->isEmpty())
        <p>条件にあったアイテムはありませんでした。</p>
    @endif
    @foreach ($capsItemsOutputs as $capsItemsOutput)
     <li>
        <p>{{$capsItemsOutput->id}}</p>
        <p>{{$capsItemsOutput->jancode}}</p>
        <p>{{$capsItemsOutput->price}}</p>
        <p>{{$capsItemsOutput->brand}}</p>
        <p>{{$capsItemsOutput->category}}</p>
        <p>{{$capsItemsOutput->color}}</p>
     </li>
    @endforeach
</div>

<div class="toMainBtn">
    <a href="{{ route('toMain') }}">
        <div>
            メインページへ
        </div>
    </a>
</div>

@endsection