@section('showItem')

<div>
    @if (isset($userInfo))
    <p>ユーザーのお気に入りTops</p>
    <p>{{$userInfo->favTops}}</p>
    @if (isset($getTopsImg))
    <img src="{{ asset('img/img_tops/' . $getTopsImg->img) }}" alt="{{$getTopsImg->img}}">
    @endif
    @endif
</div>
<div>
    @if (isset($userInfo))
    <p>ユーザーのお気に入りPants</p>
    <p>{{$userInfo->favPants}}</p>
    @if (isset($getPantsImg))
    <img src="{{ asset('img/img_pants/' . $getPantsImg->img) }}" alt="{{$getPantsImg->img}}">
    @endif
    @endif
</div>
<div>
    @if (isset($userInfo))
    <p>ユーザーのお気に入りTops</p>
    <p>{{$userInfo->favShoes}}</p>
    @if (isset($getShoesImg))
    <img src="{{ asset('img/img_shoes/' . $getShoesImg->img) }}" alt="{{$getShoesImg->img}}">
    @endif
    @endif
</div>

@endsection