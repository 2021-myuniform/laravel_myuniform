@section('description')

<div>
    <p>{{$userInfo->created_at}}</p>
    <p>タイトル : {{$userInfo->title}}</p>
    <p>説明 : {{$userInfo->openText}}</p>
</div>

@if (Auth::check())
@if ($like)
      {{-- {{ Form::model($post, array('action' => array('LikesController@destroy', $post->id, $like->post_id))) }} --}}
      {{ Form::model($post, ['route'=>['LikesController@destroy', $post->id, $like->post_id]]) }}
        <button type="submit">
          {{-- <img src="/images/icon_heart_red.svg"> --}}
          <i class="fas fa-heart"></i>
          Like {{ $post->likesCount }}
        </button>
      {!! Form::close() !!}
@else
  {{-- {{ Form::model($post, array('action' => array('LikesController@store', $post->id))) }} --}}
  {{ Form::model($post, ['route'=>['LikesController@store', $post->id]]) }}
    <button type="submit">
      {{-- <img src="/images/icon_heart.svg"> --}}
      <i class="far fa-heart"></i>
      Like {{ $post->likesCount }}
    </button>
  {!! Form::close() !!}
@endif
@endif

@endsection