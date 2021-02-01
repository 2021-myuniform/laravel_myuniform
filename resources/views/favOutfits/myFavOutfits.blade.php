@section('favList')

<section class="favSection">

    @foreach ($userData as $item)

    <div class="favListBox">
        <div>
            <img class="favListImg" src="{{$item->outfitSetImg}}" alt="image">
        </div>
        <p>{{$item->created_at}}</p>
        <h3>タイトル : {{$item->title}}</h3>
        <p>投稿者 : {{$user->name}}</p>
    </div>

    @endforeach

</section>


@endsection


