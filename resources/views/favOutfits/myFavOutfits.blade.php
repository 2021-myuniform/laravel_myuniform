@section('favList')

<section class="favSection">

    @foreach ($userData as $item)

    <div class="favListBox">
        <div>
            <img class="favListImg" src="{{$item->outfitSetImg}}" alt="image">
        </div>
        <p>{{$item->created_at->format('Y年m月d日')}}</p>
        <h3>{{$item->title}}</h3>
        <p>{{$user->name}}</p>
    </div>

    @endforeach

</section>


@endsection


