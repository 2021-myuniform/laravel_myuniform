@section('header')

<header class="headerList">
    <div class="headerTitle">
        <h1>MyUniform</h1>
    </div>
    <div class="displayPcOn">
        <a href="{{ route('searchTops') }}">条件検索</a>
        <a href="{{ route('yourlist') }}">あなたの好みのアイテム一覧</a>
        <a href="{{ route('dashboard') }}">ダッシュボード</a>
    </div>
    <div class="displaySpOn">
        <a href="{{ route('searchTops') }}"><i class="fas fa-search"></i></a>
        <a href="{{ route('yourlist') }}"><i class="fas fa-list"></i></a>
        <a href="{{ route('dashboard') }}"><i class="far fa-user"></i></a>
    </div>
</header>

@endsection