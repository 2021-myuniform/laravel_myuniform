<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>楽天APIテスト</h1>

    <form action="{{ route('sendInput') }}" method="POST">
        @csrf
        <input type="text" name="keyword">
        <select name="genre" id="">
            <optgroup label="男性向け">
                <option value="508759">Tシャツ</option>
                <option value="508772">ハーフパンツ・ショートパンツ</option>
              </optgroup>
              <optgroup label="女性向け">
                <option value="508803">Tシャツ</option>
                <option value="508820">ハーフパンツ・ショートパンツ</option>
              </optgroup>
        </select>
        <select name="brand" id="">
                <option value="">メーカーを選択</option>
                <option value="1008297">ゴーセン</option>
                <option value="1000601">ミズノ</option>
                <option value="1002656">ヨネックス</option>
        </select>
        <select name="color" id="">
                <option value="">色を選択</option>
                <option value="1004015">ネイビー</option>
                <option value="1000886">ブラック</option>
                <option value="1000873">ホワイト</option>
        </select>
        <input type="submit" value="送信">
    </form>

    @if (isset($items))
    @foreach ($items as $item)
    <p>{{json_encode($test)}}</p>
    <div style="padding: 30px;">
        <p>{{$item['itemName']}}</p>
        <p>¥ {{$item['itemPrice']}}</p>
        {{-- <p>{{json_encode($item['all'])}}</p> --}}
        <p>{{$item['genre']}}</p>
        {{-- <p>{{$item['tag']}}</p> --}}
        <a href="{{$item['itemUrl']}}">{{$item['itemUrl']}}</a>
        <img src="{{$item['mediumImageUrls']}}" alt="">
    </div>
    @endforeach
    @endif



<script>

</script>
</body>
</html>
