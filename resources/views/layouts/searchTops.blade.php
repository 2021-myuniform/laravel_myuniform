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

    <form action="http://localhost/laravel_myuniform/public/searchTops/find" method="post">
        @csrf

        <input type="hidden" name="type" value="tops">

        <div>
            <p>お探しのトップスカラーを教えてください。</p>
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



        <select name="gender" id="">
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select>
        <select name="target" id="">
            <option value="adult">Adult</option>
        </select>
        <select name="brand" id="">
            <option value="yonex">Yonex</option>
        </select>
        <select name="category" id="">
            <option value="long">Long</option>
            <option value="half">Half</option>
        </select>
        {{-- <select name="color" id="">
            <option value="black">黒</option>
            <option value="yellow">黄</option>
            <option value="blue">青</option>
            <option value="red">赤</option>
            <option value="pink">ピンク</option>
        </select> --}}
        <input type="submit" value="Submit">
    </form>
</div>

@endsection