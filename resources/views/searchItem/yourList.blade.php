<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{-- <div>
        @foreach ($pantsItems as $pantsItem)
         <li>
            <p>{{$pantsItem->id}}</p>
            <p>{{$pantsItem->user_id}}</p>
            <p>{{$pantsItem->type}}</p>
            <p>{{$pantsItem->color}}</p>
         </li>
@endforeach
    </div>

    <div>
        @foreach ($topsItems as $topsItem)
         <li>
            <p>{{$topsItem->id}}</p>
            <p>{{$topsItem->user_id}}</p>
            <p>{{$topsItem->type}}</p>
            <p>{{$topsItem->color}}</p>
         </li>
@endforeach
    </div>

    <div>
        @foreach ($shoesItems as $shoesItem)
         <li>
            <p>{{$shoesItem->id}}</p>
            <p>{{$shoesItem->user_id}}</p>
            <p>{{$shoesItem->type}}</p>
            <p>{{$shoesItem->color}}</p>
         </li>
        @endforeach
    </div> --}}

    <div style="background-color: gray">
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
</body>
</html>
