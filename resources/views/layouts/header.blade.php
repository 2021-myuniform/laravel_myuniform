@section('header')

<div class="headerList">
    <a href="{{ route('searchPants') }}">条件検索</a>
    <a href="{{ route('dashboard') }}">ダッシュボード</a>
    <a href="{{ route('yourlist') }}">あなたの好みのアイテム一覧</a>
</div>

@endsection