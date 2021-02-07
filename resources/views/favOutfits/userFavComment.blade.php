@section('showComment')

<div class="commentWrap">
    <div class="commentContainer">
        <div>
            <div>
                @foreach ($comments as $comment)
                <div class="userComment">
                    <div class="commentBox">
                        <div>
                            @foreach ($allUsers as $allUser)
                            @if ($allUser->id == $comment->user_id)
                            <img class="userOpenIcon" src="{{ asset('storage/' . $allUser->userOpenImgPath) }}" alt="{{$allUser->userOpenImgPath}}">
                            @endif
                            @endforeach
                        </div>
                        <div class="commentBoxText">
                            <p>{{$comment->comment}}</p>
                        </div>
                    </div>
                    <div>
                        <p>ユーザー名 : {{$comment->userName}}</p>
                        <p>{{$comment->created_at}}</p>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </div>

    <div>
        <form action="{{ route('uploadComment') }}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="user_id" value="{{$users->id}}">
            <input type="hidden" name="detail_id" value="{{$userInfo->id}}">
            <p>名前 : {{$users->name}}</p>
            <input type="hidden" name="userName" value="{{$users->name}}">
            <input type="text" name="comment">
            <input type="submit" value="コメント">
        </form>
    </div>
</div>

@endsection