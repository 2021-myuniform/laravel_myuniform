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
        <p>ここではお探しのウェアについてお答えください。</p>
        <p>まずはトップスについて教えてください！</p>
    </div>

    <div class="mannequinSect">
        <img class="mannequinImg" src="{{ asset('img/other/manekin_background.jpg') }}" alt="">
        <div class="mannequinTops"></div>
    </div>

    {{-- <form action="http://localhost/laravel_myuniform/public/searchTops/find" method="post"> --}}
    <form action="{{ route('searchTopsRegister') }}" method="post">
        @csrf

        <input type="hidden" name="type" value="tops">

        <div class="ask">
            <p>お探しのトップスカラーを教えてください。</p>
        </div>

        <div>
            <ul class="colorSelect">
                <li class="colorSelectList">
                    <input class="colorSelectInput" type="radio" name="color" value="black" id="colorBlack">
                    <label for="colorBlack"><div class="blackBox colorBox"></div></label>
                </li>
                <li class="colorSelectList">
                    <input class="colorSelectInput" type="radio" name="color" value="navy" id="colorNavy">
                    <label for="colorNavy"><div class="navyBox colorBox"></div></label>
                </li>
                <li class="colorSelectList">
                    <input class="colorSelectInput" type="radio" name="color" value="blue" id="colorBlue">
                    <label for="colorBlue"><div class="blueBox colorBox"></div></label>
                </li>
                <li class="colorSelectList">
                    <input class="colorSelectInput" type="radio" name="color" value="skyblue" id="colorSkyblue">
                    <label for="colorSkyblue"><div class="skyblueBox colorBox"></div></label>
                </li>
                <li class="colorSelectList">
                    <input class="colorSelectInput" type="radio" name="color" value="lightgreen" id="colorLightgreen">
                    <label for="colorLightgreen"><div class="lightgreenBox colorBox"></div></label>
                </li>
                <li class="colorSelectList">
                    <input class="colorSelectInput" type="radio" name="color" value="green" id="colorGreen">
                    <label for="colorGreen"><div class="greenBox colorBox"></div></label>
                </li>
                <li class="colorSelectList">
                    <input class="colorSelectInput" type="radio" name="color" value="yellow" id="colorYellow">
                    <label for="colorYellow"><div class="yellowBox colorBox"></div></label>
                </li>
                <li class="colorSelectList">
                    <input class="colorSelectInput" type="radio" name="color" value="orange" id="colorOrange">
                    <label for="colorOrange"><div class="orangeBox colorBox"></div></label>
                </li>
                <li class="colorSelectList">
                    <input class="colorSelectInput" type="radio" name="color" value="red" id="colorRed">
                    <label for="colorRed"><div class="redBox colorBox"></div></label>
                </li>
                <li class="colorSelectList">
                    <input class="colorSelectInput" type="radio" name="color" value="pink" id="colorPink">
                    <label for="colorPink"><div class="pinkBox colorBox"></div></label>
                </li>
                <li class="colorSelectList">
                    <input class="colorSelectInput" type="radio" name="color" value="purple" id="colorPurple">
                    <label for="colorPurple"><div class="purpleBox colorBox"></div></label>
                </li>
                <li class="colorSelectList">
                    <input class="colorSelectInput" type="radio" name="color" value="gray" id="colorGray">
                    <label for="colorGray"><div class="grayBox colorBox"></div></label>
                </li>
                <li class="colorSelectList">
                    <input class="colorSelectInput" type="radio" name="color" value="white" id="colorWhite">
                    <label for="colorWhite"><div class="whiteBox colorBox"></div></label>
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

        {{-- <div class="ask">
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
        </div> --}}

        <div class="ask">
            <p>お探しのウェアのタイプをお選びください。</p>
        </div>

        {{-- <div>
            <ul class="categorySelect">
                <li class="categorySelectList">
                    <input class="categorySelectInput" type="radio" name="category" value="long" id="longCategory">
                    <div class="categoryText">
                        長袖
                    </div>
                </li>
                <li class="categorySelectList">
                    <input class="categorySelectInput" type="radio" name="category" value="half" id="halfCategory">
                    <div class="categoryText">
                        半袖
                    </div>
                </li>
            </ul>
        </div> --}}

        <div>
            <ul class="categorySelect">
                <li class="categorySelectList">
                    <input class="categorySelectInputNone" type="radio" name="category" value="long" id="longCategory">
                    <label for="longCategory">
                        <img class="categoryItem" src="{{ asset('img/other/long-shirt.png') }}" alt="">
                        <div class="categoryText">
                            長袖
                        </div>
                    </label>
                </li>
                <li class="categorySelectList">
                    <input class="categorySelectInputNone" type="radio" name="category" value="half" id="halfCategory">
                    <label for="halfCategory">
                        <img class="categoryItem" src="{{ asset('img/other/t-shirt-logo.png') }}" alt="">
                        <div class="categoryText">
                            半袖
                        </div>
                    </label>
                </li>
            </ul>
        </div>

        <div class="nextBtnBox">
            <input class="nextBtn" type="submit" value="次に進む">
        </div>
    </form>
</div>

@endsection