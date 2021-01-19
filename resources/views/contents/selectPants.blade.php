<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div style="background-color: gray">
        <p>Pantsの条件に一致したアイテム</p>
        @if ($pantsItemsOutputs->isEmpty())
            <p>条件にあったアイテムはありませんでした。</p>
        @endif
        @foreach ($pantsItemsOutputs as $pantsItemsOutput)
        <form action="{{ route('sendPants') }}" method="post">
            @csrf
            <li>
               <p>{{$pantsItemsOutput->id}}</p>
               <input type="hidden" name="pantsItemsOutputId" value="{{$pantsItemsOutput->id}}">
               <p>{{$pantsItemsOutput->jancode}}</p>
               <p>{{$pantsItemsOutput->adult}}</p>
               <p>{{$pantsItemsOutput->price}}</p>
               <p>{{$pantsItemsOutput->brand}}</p>
               <p>{{$pantsItemsOutput->category}}</p>
               <p>{{$pantsItemsOutput->color}}</p>
            </li>
            <input type="submit" value="選ぶ">
        </form>
            @endforeach
    </div>
</body>
</html>
