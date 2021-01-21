@section('searchItemName')

<div class="searchContainer">
    <div>
        <ul class="currentPositionList">
            <li class="currentPositionList_item"><div class="positionCircle"></div><div class="currentPositionText">基本情報</div></li>
            <li class="currentPositionList_item"><div class="positionCircle"></div><div class="currentPositionText">スポーツ</div></li>
            <li class="currentPositionList_item"><div class="positionCircle currentPositionChecked"></div><div class="currentPositionText">ウェア条件</div></li>
            <li class="currentPositionList_item"><div class="positionCircle"></div><div class="currentPositionText">確認</div></li>
        </ul>
    </div>

    <div class="introText">
        <p>ここではお探しのパンツカラーについてお答えください。</p>
    </div>

    <div class="mannequinSect">
        <img class="mannequinImg" src="{{ asset('img/other/manekin_background.jpg') }}" alt="">
        <div class="mannequinPants"></div>
    </div>

    {{-- <form action="http://localhost/laravel_myuniform/public/searchTops/find" method="post"> --}}
    <form action="{{ route('searchPantsRegister') }}" method="post">
        @csrf

        <input type="hidden" name="type" value="pants">

        <div class="ask">
            <p>お探しのパンツカラーを教えてください。</p>
        </div>

        <div>
            <ul class="colorSelect">
                <li class="colorSelectList">
                    <input class="colorSelectInput" type="radio" name="color" value="black" id="colorBlack">
                    <label for="colorBlack"><div class="blackBox colorBox"></div></label>
                </li>
                <li class="colorSelectList">
                    <input class="colorSelectInput" type="radio" name="color" value="white" id="colorWhite">
                    <label for="colorWhite"><div class="whiteBox colorBox"></div></label>
                </li>
                <li class="colorSelectList">
                    <input class="colorSelectInput" type="radio" name="color" value="blue" id="colorBlue">
                    <label for="colorBlue"><div class="blueBox colorBox"></div></label>
                </li>
                <li class="colorSelectList">
                    <input class="colorSelectInput" type="radio" name="color" value="pink" id="colorPink">
                    <label for="colorPink"><div class="pinkBox colorBox"></div></label>
                </li>
                <li class="colorSelectList">
                    <input class="colorSelectInput" type="radio" name="color" value="red" id="colorRed">
                    <label for="colorRed"><div class="redBox colorBox"></div></label>
                </li>
            </ul>
        </div>

        <div class="ask">
            <p>お探しのブランドを教えてください。</p>
        </div>

        <div>
            <ul class="brandSelect">
                <li class="brandSelectList">
                    <input class="brandSelectInput" type="radio" name="brand" value="yonex" id="yonexBrand">
                    <label class="brandBox" for="yonexBrand">Yonex</label>
                </li>
                <li class="brandSelectList">
                    <input class="brandSelectInput" type="radio" name="brand" value="nike" id="nikeBrand">
                    <label class="brandBox" for="nikeBrand">NIKE</label>
                </li>
                <li class="brandSelectList">
                    <input class="brandSelectInput" type="radio" name="brand" value="Adidas" id="adidasBrand">
                    <label class="brandBox" for="adidasBrand">Adidas</label>
                </li>
            </ul>
        </div>

        <div class="ask">
            <p>お探しの性別を選んでください。</p>
        </div>

        <div>
            <ul class="genderSelect">
                <li class="genderSelectList">
                    <input class="genderSelectInput" type="radio" name="gender" value="male" id="maleGender">
                    <div class="genderText">
                        男性
                    </div>
                </li>
                <li class="genderSelectList">
                    <input class="genderSelectInput" type="radio" name="gender" value="female" id="femaleGender">
                    <div class="genderText">
                        女性
                    </div>
                </li>
            </ul>
        </div>

        <div class="ask">
            <p>お探しの対象を教えてください。</p>
        </div>

        <div>
            <ul class="targetSelect">
                <li class="targetSelectList">
                    <input class="targetSelectInput" type="radio" name="target" value="adult" id="adultTarget">
                    <div class="targetText">
                        大人
                    </div>
                </li>
                <li class="targetSelectList">
                    <input class="targetSelectInput" type="radio" name="target" value="child" id="childTarget">
                    <div class="targetText">
                        子供
                    </div>
                </li>
            </ul>
        </div>

        <div class="ask">
            <p>お探しのウェアのタイプをお選びください。</p>
        </div>

        <div>
            <ul class="categorySelect">
                <li class="categorySelectList">
                    <input class="categorySelectInput" type="radio" name="category" value="long" id="longCategory">
                    <div class="categoryText">
                        ロング
                    </div>
                </li>
                <li class="categorySelectList">
                    <input class="categorySelectInput" type="radio" name="category" value="half" id="halfCategory">
                    <div class="categoryText">
                        ショート
                    </div>
                </li>
            </ul>
        </div>

        <div class="nextBtnBox">
            <input class="nextBtn" type="submit" value="次に進む">
        </div>
    </form>
</div>

@endsection