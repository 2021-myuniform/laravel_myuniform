@section('selectWear')

{{-- <div> --}}
    <div class="selectWearList">
        @if (isset($getTopsSet))
        <div class="selectWearList_container">
            <div class="selectWearList_tops selectWearList_list">
                <a href="{{ route('selectTops') }}">
                    <div class="selectWearList_contents">
                    Topsを選ぶ
                    <p>カラー:{{$getTopsSet->color}}</p>
                    <p>ブランド:{{$getTopsSet->brand}}</p>
                    <p>対象:{{$getTopsSet->gender}}</p>
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
        <div class="selectWearList_container">
            <div class="selectWearList_pants selectWearList_list">
                <a href="{{ route('selectPants') }}">
                    <div class="selectWearList_contents">
                    Pantsを選ぶ
                    <p>カラー:{{$getPantsSet->color}}</p>
                    <p>ブランド:{{$getPantsSet->brand}}</p>
                    <p>対象:{{$getPantsSet->gender}}</p>
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
        <div class="selectWearList_container">
            <div class="selectWearList_shoes selectWearList_list">
                <a href="{{ route('selectShoes') }}">
                <div class="selectWearList_contents">
                Shoesを選ぶ
                <p>カラー:{{$getShoesSet->color}}</p>
                <p>ブランド:{{$getShoesSet->brand}}</p>
                <p>対象:{{$getShoesSet->gender}}</p>
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
    </div>
{{-- </div> --}}

@endsection