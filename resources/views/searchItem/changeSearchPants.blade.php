{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>Pantsの検索条件を設定してください</p>

    <form action="{{ route('registerChangePants') }}" method="post">
        @csrf
        <input type="hidden" name="type" value="pants">
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
        <select name="color" id="">
            <option value="black">黒</option>
            <option value="yellow">黄</option>
            <option value="blue">青</option>
            <option value="red">赤</option>
            <option value="pink">ピンク</option>
        </select>
        <input type="submit" value="Submit">
    </form>

</body>
</html> --}}

@extends('layouts.searchCommon')

@section('mainCss')
<link rel="stylesheet" href="{{ asset('css/mainPage.css') }}">
<link rel="stylesheet" href="{{ asset('css/searchPage.css') }}">
@endsection

@include('layouts.header')

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
    <form action="{{ route('registerChangePants') }}" method="post">
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
                    <input class="colorSelectInput" type="radio" name="color" value="navy" id="colorNavy">
                    <label for="colorNavy"><div class="navyBox colorBox"></div></label>
                </li>
                <li class="colorSelectList">
                    <input class="colorSelectInput" type="radio" name="color" value="blue" id="colorBlue">
                    <label for="colorBlue"><div class="blueBox colorBox"></div></label>
                </li>
                {{-- <li class="colorSelectList">
                    <input class="colorSelectInput" type="radio" name="color" value="skyblue" id="colorSkyblue">
                    <label for="colorSkyblue"><div class="skyblueBox colorBox"></div></label>
                </li>
                <li class="colorSelectList">
                    <input class="colorSelectInput" type="radio" name="color" value="lightgreen" id="colorLightgreen">
                    <label for="colorLightgreen"><div class="lightgreenBox colorBox"></div></label>
                </li> --}}
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
                {{-- <li class="colorSelectList">
                    <input class="colorSelectInput" type="radio" name="color" value="gray" id="colorGray">
                    <label for="colorGray"><div class="grayBox colorBox"></div></label>
                </li> --}}
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
                <li class="brandSelectList">
                    <input class="brandSelectInput" type="radio" name="brand" value="asics" id="asicsBrand">
                    <label class="brandBox" for="asicsBrand">Asics</label>
                </li>
                <li class="brandSelectList">
                    <input class="brandSelectInput" type="radio" name="brand" value="diadra" id="diadraBrand">
                    <label class="brandBox" for="diadraBrand">Diadra</label>
                </li>
                <li class="brandSelectList">
                    <input class="brandSelectInput" type="radio" name="brand" value="prince" id="princeBrand">
                    <label class="brandBox" for="princeBrand">Prince</label>
                </li>
                <li class="brandSelectList">
                    <input class="brandSelectInput" type="radio" name="brand" value="fila" id="filaBrand">
                    <label class="brandBox" for="filaBrand">FILA</label>
                </li>
                <li class="brandSelectList">
                    <input class="brandSelectInput" type="radio" name="brand" value="ellesse" id="ellesseBrand">
                    <label class="brandBox" for="ellesseBrand">Ellesse</label>
                </li>
                <li class="brandSelectList">
                    <input class="brandSelectInput" type="radio" name="brand" value="underarmour" id="underarmourBrand">
                    <label class="brandBox" for="underarmourBrand">Underarmour</label>
                </li>
                <li class="brandSelectList">
                    <input class="brandSelectInput" type="radio" name="brand" value="babolat" id="babolatBrand">
                    <label class="brandBox" for="babolatBrand">Babolat</label>
                </li>
                <li class="brandSelectList">
                    <input class="brandSelectInput" type="radio" name="brand" value="lecoqsportif" id="lecoqsportifBrand">
                    <label class="brandBox" for="lecoqsportifBrand">le coq sportif</label>
                </li>
                <li class="brandSelectList">
                    <input class="brandSelectInput" type="radio" name="brand" value="lacoste" id="lacosteBrand">
                    <label class="brandBox" for="lacosteBrand">Lacoste</label>
                </li>
                <li class="brandSelectList">
                    <input class="brandSelectInput" type="radio" name="brand" value="newbalance" id="newbalanceBrand">
                    <label class="brandBox" for="newbalanceBrand">New Balance</label>
                </li>
                <li class="brandSelectList">
                    <input class="brandSelectInput" type="radio" name="brand" value="dunlop" id="dunlopBrand">
                    <label class="brandBox" for="dunlopBrand">Dunlop</label>
                </li>
                <li class="brandSelectList">
                    <input class="brandSelectInput" type="radio" name="brand" value="srixon" id="srixonBrand">
                    <label class="brandBox" for="srixonBrand">Srixon</label>
                </li>
                <li class="brandSelectList">
                    <input class="brandSelectInput" type="radio" name="brand" value="oakley" id="oakleyBrand">
                    <label class="brandBox" for="oakleyBrand">Oakley</label>
                </li>
                <li class="brandSelectList">
                    <input class="brandSelectInput" type="radio" name="brand" value="hydrogen" id="hydrogenBrand">
                    <label class="brandBox" for="hydrogenBrand">Hydrogen</label>
                </li>
            </ul>
        </div>

        {{-- <div class="ask">
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
        </div> --}}

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