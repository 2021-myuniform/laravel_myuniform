<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>あなたの好みの条件にあったリストです</p>

    <div style="background-color: gray">
        <p>Pantsの条件に一致したアイテム</p>
        @if ($pantsItemsOutputs->isEmpty())
            <p>条件にあったアイテムはありませんでした。</p>
        @endif
        @foreach ($pantsItemsOutputs as $pantsItemsOutput)
         <li>
            <p>{{$pantsItemsOutput->id}}</p>
            <p>{{$pantsItemsOutput->jancode}}</p>
            <p>{{$pantsItemsOutput->adult}}</p>
            <p>{{$pantsItemsOutput->price}}</p>
            <p>{{$pantsItemsOutput->brand}}</p>
            <p>{{$pantsItemsOutput->category}}</p>
            <p>{{$pantsItemsOutput->color}}</p>
         </li>
        @endforeach
    </div>


    <div style="background-color: pink">
        <p>Topsの条件に一致したアイテム</p>
        @if ($topsItemsOutputs->isEmpty())
            <p>条件にあったアイテムはありませんでした。</p>
        @endif
        @foreach ($topsItemsOutputs as $topsItemsOutput)
         <li>
            <p>{{$topsItemsOutput->id}}</p>
            <p>{{$topsItemsOutput->jancode}}</p>
            <p>{{$topsItemsOutput->adult}}</p>
            <p>{{$topsItemsOutput->price}}</p>
            <p>{{$topsItemsOutput->brand}}</p>
            <p>{{$topsItemsOutput->category}}</p>
            <p>{{$topsItemsOutput->color}}</p>
         </li>
        @endforeach
    </div>

    <div style="background-color: lightgreen">
        <p>Shoesの条件に一致したアイテム</p>
        @if ($shoesItemsOutputs->isEmpty())
            <p>条件にあったアイテムはありませんでした。</p>
        @endif
        @foreach ($shoesItemsOutputs as $shoesItemsOutput)
         <li>
            <p>{{$shoesItemsOutput->id}}</p>
            <p>{{$shoesItemsOutput->jancode}}</p>
            <p>{{$shoesItemsOutput->adult}}</p>
            <p>{{$shoesItemsOutput->price}}</p>
            <p>{{$shoesItemsOutput->brand}}</p>
            <p>{{$shoesItemsOutput->category}}</p>
            <p>{{$shoesItemsOutput->color}}</p>
         </li>
        @endforeach
    </div>

    <div>
        <a href="{{ route('toMain') }}">メインページへ</a>
    </div>
</body>
</html>
