@section('showItem')

<div class="showWearList">
    <div class="showWearList_head">
        {{-- @if (isset($userInfo))
        <p style="display: none">ユーザーのお気に入りTops</p>
        <p style="display: none">{{$userInfo->favTops}}</p>
        @if (isset($getTopsImg))
        <img class="userSelectImgTops" src="{{ asset('img/img_tops/' . $getTopsImg->img) }}" alt="{{$getTopsImg->img}}">
        @endif
        @endif --}}
    </div>
    <a href="#topsShowItem" class="topsShowItem" rel="modal:open">
        @if (isset($userInfo))
        <p style="display: none">ユーザーのお気に入りTops</p>
        <p style="display: none">{{$userInfo->favTops}}</p>
        @if (isset($getTopsImg))
        <img class="userSelectImgTops" src="{{ asset('img/img_tops/' . $getTopsImg->img) }}" alt="{{$getTopsImg->img}}">
        @endif
        @endif

        <!-- Modal HTML embedded directly into document -->
        @if (isset($getTopsImg->jancode))
        <div id="topsShowItem" class="modal showItemModal">
         <p class="modalBtnText">Tops : </p>
         <p class="modalBtnText">商品名 : {{$getTopsImg->jancode}}</p>
         <p class="modalBtnText">購入ページに飛びますか？</p>
         <div class="modalBtn">
            <a class="modalBtnSet" href="#" rel="modal:close">Close</a>
            <a class="modalBtnSet" href="{{$getTopsImg->url}}" target="_blank" rel="noopener noreferrer">購入ページへ</a>
         </div>
        </div>
        @endif
    </a>
    <div>
        @if (isset($userInfo))
        <p style="display: none">ユーザーのお気に入りPants</p>
        <p style="display: none">{{$userInfo->favPants}}</p>
        @if (isset($getPantsImg))
        <img class="userSelectImgPants" src="{{ asset('img/img_pants/' . $getPantsImg->img) }}" alt="{{$getPantsImg->img}}">
        @endif
        @endif
    </div>
    <div>
        @if (isset($userInfo))
        <p style="display: none">ユーザーのお気に入りTops</p>
        <p style="display: none">{{$userInfo->favShoes}}</p>
        @if (isset($getShoesImg))
        <img class="userSelectImgShoes" src="{{ asset('img/img_shoes/' . $getShoesImg->img) }}" alt="{{$getShoesImg->img}}">
        @endif
        @endif
    </div>
    <div class="showWearList_foot">
        {{-- @if (isset($userInfo))
        <p style="display: none">ユーザーのお気に入りTops</p>
        <p style="display: none">{{$userInfo->favShoes}}</p>
        @if (isset($getShoesImg))
        <img class="userSelectImgShoes" src="{{ asset('img/img_shoes/' . $getShoesImg->img) }}" alt="{{$getShoesImg->img}}">
        @endif
        @endif --}}
    </div>
</div>

@endsection