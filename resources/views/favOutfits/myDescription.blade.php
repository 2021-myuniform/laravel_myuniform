@section('description')

<div>
    <p>{{$userInfo->created_at}}</p>
    <p>タイトル : {{$userInfo->title}}</p>
    <p>説明 : {{$userInfo->openText}}</p>
    <p>個人用メモ : {{$userInfo->closeText}}</p>
</div>

@endsection