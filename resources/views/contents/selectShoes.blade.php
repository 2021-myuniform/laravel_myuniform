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
        @if ($shoesItemsOutputs->isEmpty())
            <p>条件にあったアイテムはありませんでした。</p>
        @endif
        @foreach ($shoesItemsOutputs as $shoesItemsOutput)
        <form action="{{ route('sendShoes') }}" method="post">
            @csrf
            <li>
               <p>{{$shoesItemsOutput->id}}</p>
               <input type="hidden" name="shoesItemsOutputId" value="{{$shoesItemsOutput->id}}">
               <p>{{$shoesItemsOutput->jancode}}</p>
               <p>{{$shoesItemsOutput->adult}}</p>
               <p>{{$shoesItemsOutput->price}}</p>
               <p>{{$shoesItemsOutput->brand}}</p>
               <p>{{$shoesItemsOutput->category}}</p>
               <p>{{$shoesItemsOutput->color}}</p>
            </li>
            <input type="submit" value="選ぶ">
        </form>
            @endforeach
    </div>
</body>
</html>
