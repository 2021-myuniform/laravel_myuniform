@section('header')

<header class="headerList">
    <div class="headerTitle">
        <h1><a class="h1Title" href="{{ route('toMain') }}">Wearcoord</a></h1>
    </div>
    <div class="displayPcOn">
        <a href="{{ route('searchTops') }}">条件検索</a>
        <a href="{{ route('yourlist') }}">あなたの好みのアイテム一覧</a>
        <a href="{{ route('showMyFavList') }}">マイコーデ</a>
        <a href="{{ route('dashboard') }}">ダッシュボード</a>
    </div>
    <div class="displaySpOn">
        <a href="{{ route('searchTops') }}"><i class="fas fa-search"></i></a>
        <a href="{{ route('yourlist') }}"><i class="fas fa-list"></i></a>
        <a href="{{ route('showMyFavList') }}"><i class="fab fa-gratipay"></i></a>
        <a href="{{ route('dashboard') }}"><i class="far fa-user"></i></a>
    </div>
</header>

@endsection