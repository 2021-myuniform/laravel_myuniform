@section('header')

<header class="headerList">
    <a href="{{ route('searchTops') }}">条件検索</a>
    <a href="{{ route('dashboard') }}">ダッシュボード</a>
    <a href="{{ route('yourlist') }}">あなたの好みのアイテム一覧</a>
</header>

@endsection