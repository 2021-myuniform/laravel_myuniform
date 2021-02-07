@section('favList')

<section class="favSection">

    <input type="radio" id="mycoord" class="tab-switch" checked="checked" name="tab">
    <label for="mycoord" class="tab-label">マイコーデ</label>
    <div class="tab-content">
    @foreach ($userData as $item)

    <a href="{{ asset('/detail?id=' . $item->id) }}" class="favListBox">
        <div>
            <img class="favListImg" src="{{$item->outfitSetImg}}" alt="image">
        </div>
        <p>{{$item->created_at}}</p>
        <h3>タイトル : {{$item->title}}</h3>
    </a>

    @endforeach
    </div>

    <input type="radio" id="othercoord" class="tab-switch" name="tab">
    <label for="othercoord" class="tab-label">他人のコーデ</label>
    <div class="tab-content">
        @foreach ($otherUser as $item)

        <a href="{{ asset('/userDetail?id=' . $item->id) }}" class="favListBox">
            <div>
                <img class="favListImg" src="{{$item->outfitSetImg}}" alt="image">
            </div>
            <p>{{$item->created_at}}</p>
            <h3>タイトル : {{$item->title}}</h3>
            <p>投稿者 : {{$user->name}}</p>
        </a>

        @endforeach
    </div>


    {{-- @foreach ($userData as $item)

    <div class="favListBox">
        <div>
            <img class="favListImg" src="{{$item->outfitSetImg}}" alt="image">
        </div>
        <p>{{$item->created_at}}</p>
        <h3>タイトル : {{$item->title}}</h3>
        <p>投稿者 : {{$user->name}}</p>
    </div>

    @endforeach --}}

</section>


@endsection


