<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div style="background-color: pink">
        <p>Pantsの条件に一致したアイテム</p>
        @if ($topsItemsOutputs->isEmpty())
            <p>条件にあったアイテムはありませんでした。</p>
        @endif
        @foreach ($topsItemsOutputs as $topsItemsOutput)
        <form action="{{ route('sendTops') }}" method="post">
            @csrf
            <li>
               <p>{{$topsItemsOutput->id}}</p>
               <input type="hidden" name="topsItemsOutputId" value="{{$topsItemsOutput->id}}">
               <p>{{$topsItemsOutput->jancode}}</p>
               <p>{{$topsItemsOutput->adult}}</p>
               <p>{{$topsItemsOutput->price}}</p>
               <p>{{$topsItemsOutput->brand}}</p>
               <p>{{$topsItemsOutput->category}}</p>
               <p>{{$topsItemsOutput->color}}</p>
            </li>
            <input type="submit" value="選ぶ">
        </form>
            @endforeach
    </div>
</body>
</html>
