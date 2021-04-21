@section('showItem')

<div class="showWearList" id="showWearList">
    <a href="#topsShowItem" class="ShowItem" rel="modal:open">
        <div class="showWearList_head">
            @if (isset($userInfo))
            <p style="display: none">ユーザーのお気に入りCaps</p>
            <p style="display: none">{{$userInfo->favCaps}}</p>
            @if (isset($getCapsImg))
            <img class="userSelectImgCaps" src="{{ asset('img/img_caps/' . $getCapsImg->img) }}" alt="{{$getCapsImg->img}}">
            @endif
            @endif

            <!-- Modal HTML embedded directly into document -->
            @if (isset($getCapsImg->jancode))
            <div id="topsShowItem" class="modal showItemModal">
             <p class="modalBtnText">Caps : </p>
            <p class="modalBtnText">商品名 : {{$getCapsImg->jancode}}</p>
            <p class="modalBtnText">購入ページに飛びますか？</p>
            <div class="modalBtn">
            <a class="modalBtnSet" href="#" rel="modal:close">Close</a>
           <a class="modalBtnSet" href="{{$getCapsImg->url}}" target="_blank" rel="noopener noreferrer">購入ページへ</a>
            </div>
            </div>
            @endif
        </div>
    </a>

    <div>
        <div>
            @if (!isset($userInfo->userImgPath))
            <div class="faceNoImg"></div>
            @else
            <img class="userFaceImg" class="userImg" src="{{ asset(Storage::url($userInfo->userImgPath)) }}" alt="">
            @endif
        </div>
    </div>

    <a href="#topsShowItem" class="ShowItem" rel="modal:open">
        <div class="mainTopsStyle">
            @if (isset($userInfo))
            <p style="display: none">ユーザーのお気に入りTops</p>
            <p style="display: none">{{$userInfo->favTops}}</p>
            @if (isset($getTopsImg->img))
            <img class="userSelectImgTops" src="{{ asset('img/img_tops/' . $getTopsImg->img) }}" alt="{{$getTopsImg->img}}">
            @endif
            @if (isset($getTopsImg->itemId))
            <img class="userSelectImgTops" src="{{ asset('img/rakuten/'. $getTopsImg->blueImg) }}" alt="{{$getTopsImg->blueImg}}">
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
            @if (isset($getTopsImg->itemId))

            <div id="topsShowItem" class="modal showItemModal">
                <p class="modalBtnText">Tops : </p>
                <p class="modalBtnText">商品名 : {{optional($rakutenInfo)->itemName}}</p>
                <p class="modalBtnText">購入ページに飛びますか？</p>
                <div class="modalBtn">
                   <a class="modalBtnSet" href="#" rel="modal:close">Close</a>
                   <a class="modalBtnSet" href="{{optional($rakutenInfo)->affiliateUrl}}" target="_blank" rel="noopener noreferrer">購入ページへ</a>
                </div>
               </div>
            @endif
        </div>
    </a>

    <a href="#pantsShowItem" class="ShowItem" rel="modal:open">
        <div class="mainPantsStyle">
            @if (isset($userInfo))
            <p style="display: none">ユーザーのお気に入りPants</p>
            <p style="display: none">{{$userInfo->favPants}}</p>
            @if (isset($getPantsImg))
            <img class="userSelectImgPants" src="{{ asset('img/img_pants/' . $getPantsImg->img) }}" alt="{{$getPantsImg->img}}">
            @endif
            @endif

            <!-- Modal HTML embedded directly into document -->
            @if (isset($getPantsImg->jancode))
            <div id="pantsShowItem" class="modal showItemModal">
             <p class="modalBtnText">Pants : </p>
             <p class="modalBtnText">商品名 : {{$getPantsImg->jancode}}</p>
             <p class="modalBtnText">購入ページに飛びますか？</p>
             <div class="modalBtn">
                <a class="modalBtnSet" href="#" rel="modal:close">Close</a>
                <a class="modalBtnSet" href="{{$getPantsImg->url}}" target="_blank" rel="noopener noreferrer">購入ページへ</a>
             </div>
            </div>
            @endif
        </div>
    </a>

    <a href="#socksShowItem" class="ShowItem" rel="modal:open">
        <div>
            @if (isset($userInfo))
            <p style="display: none">ユーザーのお気に入りSocks</p>
            <p style="display: none">{{$userInfo->favSocks}}</p>
            @if (isset($getSocksImg))
            <img class="userSelectImgSocks" src="{{ asset('img/img_socks/' . $getSocksImg->img) }}" alt="{{$getSocksImg->img}}">
            <div class="socksImg">
                <div class="socksBox" style="background-color: {{$getSocksImg->color}}"></div>
                <div class="socksBox" style="background-color: {{$getSocksImg->color}}"></div>
            </div>
            @endif
            @endif

            <!-- Modal HTML embedded directly into document -->
            @if (isset($getSocksImg->jancode))
            <div id="socksShowItem" class="modal showItemModal">
             <p class="modalBtnText">Socks : </p>
             <p class="modalBtnText">商品名 : {{$getSocksImg->jancode}}</p>
             <p class="modalBtnText">購入ページに飛びますか？</p>
             <div class="modalBtn">
                <a class="modalBtnSet" href="#" rel="modal:close">Close</a>
                <a class="modalBtnSet" href="{{$getSocksImg->url}}" target="_blank" rel="noopener noreferrer">購入ページへ</a>
             </div>
            </div>
            @endif
        </div>
    </a>

    <a  href="#shoesShowItem" class="ShowItem showItemShoes" rel="modal:open">
        <div>
            @if (isset($userInfo))
            <p style="display: none">ユーザーのお気に入りShoes</p>
            <p style="display: none">{{$userInfo->favShoes}}</p>
            @if (isset($getShoesImg))
            <img class="userSelectImgShoes" src="{{ asset('img/img_shoes/' . $getShoesImg->img) }}" alt="{{$getShoesImg->img}}">
            @endif
            @endif

            <!-- Modal HTML embedded directly into document -->
            @if (isset($getShoesImg->jancode))
            <div id="shoesShowItem" class="modal showItemModal">
             <p class="modalBtnText">Shoes : </p>
             <p class="modalBtnText">商品名 : {{$getShoesImg->jancode}}</p>
             <p class="modalBtnText">購入ページに飛びますか？</p>
             <div class="modalBtn">
                <a class="modalBtnSet" href="#" rel="modal:close">Close</a>
                <a class="modalBtnSet" href="{{$getShoesImg->url}}" target="_blank" rel="noopener noreferrer">購入ページへ</a>
             </div>
            </div>
            @endif
        </div>
    </a>
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