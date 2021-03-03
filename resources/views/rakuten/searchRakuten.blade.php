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
                <option value="1000588">ナイキ</option>
                <option value="1000595">アディダス</option>
                <option value="1000860">アシックス</option>
                <option value="1002148">ディアドラ</option>
                <option value="1008404">バボラ</option>
                <option value="1004267">プリンス</option>
                <option value="1000965">フィラ</option>
                <option value="1001753">エレッセ</option>
                <option value="1001782">オークリー</option>
                <option value="1000865">ルコック</option>
                <option value="1000808">ラコステ</option>
                <option value="1000597">ニューバランス</option>
                <option value="1001642">アンダーアーマー</option>
                <option value="1004239">スリクソン</option>
                <option value="1008507">Lotto</option>
                <option value="1005489">エンポリオ・アルマーニ</option>
        </select>
        <select name="color" id="">
                <option value="">色を選択</option>
                <option value="1004015">ネイビー</option>
                <option value="1000886">ブラック</option>
                <option value="1000873">ホワイト</option>
                {{-- <option value="1000883">ブラウン</option> --}}
                <option value="1000876">ピンク</option>
                <option value="1000877">レッド</option>
                <option value="1000875">オレンジ</option>
                <option value="1000874">イエロー</option>
                <option value="1000884">グリーン</option>
                <option value="1000885">ブルー</option>
                <option value="1000882">パープル</option>
        </select>
        <input type="submit" value="送信">
    </form>

    @if (isset($items))
    @foreach ($items as $item)
    <p>{{json_encode($test)}}</p>
    <div style="padding: 30px;">
        <p>{{$item['itemName']}}</p>
        <p>¥ {{$item['itemPrice']}}</p>
        <p>{{json_encode($item['all'])}}</p>
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
