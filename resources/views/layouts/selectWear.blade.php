@section('selectWear')

{{-- <div> --}}
    <div class="selectWearList">
        @if (isset($getTopsSet))
        <div class="selectWearList_container" id="selectWearList_tops">
            <div class="selectWearList_tops selectWearList_list">
                <a href="{{ route('selectTops') }}">
                    <div class="selectWearList_contents">
                    Topsを選ぶ
                    <p>カラー:{{$getTopsSet->color}}</p>
                    <p>ブランド:{{$getTopsSet->brand}}</p>
                    {{-- <p>対象:{{$getTopsSet->gender}}</p> --}}
                    </div>
                 </a>
            </div>
            <div class="selectWearList_select">
                <a href="{{ route('changeTops') }}">
                    <div class="selectWearList_selectItem">条件変更</div>
                </a>
            </div>
        </div>
        @endif

        @if (isset($getPantsSet))
        <div class="selectWearList_container" id="selectWearList_pants">
            <div class="selectWearList_pants selectWearList_list">
                <a href="{{ route('selectPants') }}">
                    <div class="selectWearList_contents">
                    Pantsを選ぶ
                    <p>カラー:{{$getPantsSet->color}}</p>
                    <p>ブランド:{{$getPantsSet->brand}}</p>
                    {{-- <p>対象:{{$getPantsSet->gender}}</p> --}}
                    </div>
                     </a>
            </div>
            <div class="selectWearList_select">
                <a href="{{ route('changePants') }}">
                    <div class="selectWearList_selectItem">条件変更</div>
                </a>
            </div>
        </div>
        @endif

        @if (isset($getShoesSet))
        <div class="selectWearList_container" id="selectWearList_shoes">
            <div class="selectWearList_shoes selectWearList_list">
                <a href="{{ route('selectShoes') }}">
                <div class="selectWearList_contents">
                Shoesを選ぶ
                <p>カラー:{{$getShoesSet->color}}</p>
                <p>ブランド:{{$getShoesSet->brand}}</p>
                {{-- <p>対象:{{$getShoesSet->gender}}</p> --}}
                </div>
                </a>
            </div>
            <div class="selectWearList_select">
                <a href="{{ route('changeShoes') }}">
                    <div class="selectWearList_selectItem">条件変更</div>
                </a>
            </div>
        </div>
        @endif

        @if (isset($getCapsSet))
        <div class="selectWearList_container" id="selectWearList_caps">
            <div class="selectWearList_caps selectWearList_list">
                <a href="{{ route('selectCaps') }}">
                <div class="selectWearList_contents">
                Capsを選ぶ
                <p>カラー:{{$getCapsSet->color}}</p>
                <p>ブランド:{{$getCapsSet->brand}}</p>
                {{-- <p>対象:{{$getCapsSet->gender}}</p> --}}
                </div>
                </a>
            </div>
            <div class="selectWearList_select">
                <a href="{{ route('changeCaps') }}">
                    <div class="selectWearList_selectItem">条件変更</div>
                </a>
            </div>
        </div>
        @endif

        @if (isset($getSocksSet))
        <div class="selectWearList_container" id="selectWearList_socks">
            <div class="selectWearList_socks selectWearList_list">
                <a href="{{ route('selectSocks') }}">
                <div class="selectWearList_contents">
                Capsを選ぶ
                <p>カラー:{{$getSocksSet->color}}</p>
                <p>ブランド:{{$getSocksSet->brand}}</p>
                {{-- <p>対象:{{$getSocksSet->gender}}</p> --}}
                </div>
                </a>
            </div>
            <div class="selectWearList_select">
                <a href="{{ route('changeSocks') }}">
                    <div class="selectWearList_selectItem">条件変更</div>
                </a>
            </div>
        </div>
        @endif
    </div>
{{-- </div> --}}

@endsection