<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
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
    </div>
</body>
</html>
