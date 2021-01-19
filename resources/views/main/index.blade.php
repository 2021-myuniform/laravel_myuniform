<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
@foreach ($items as $item)
    <li>
        <p>{{$item->id}}</p>
        <p>{{$item->jancode}}</p>
        <p>{{$item->gender}}</p>
        <p>{{$item->adult}}</p>
        <p>{{$item->price}}</p>
        <p>{{$item->brand}}</p>
        <p>{{$item->category}}</p>
        <p>{{$item->color}}</p>
    </li>
@endforeach
@foreach ($items2 as $item2)
    <li>
        <p>{{$item2->id}}</p>
        <p>{{$item2->jancode}}</p>
        <p>{{$item2->gender}}</p>
        <p>{{$item2->adult}}</p>
        <p>{{$item2->price}}</p>
        <p>{{$item2->brand}}</p>
        <p>{{$item2->category}}</p>
        <p>{{$item2->color}}</p>
    </li>
@endforeach
@foreach ($items3 as $item3)
    <li>
        <p>{{$item3->id}}</p>
        <p>{{$item3->jancode}}</p>
        <p>{{$item3->gender}}</p>
        <p>{{$item3->adult}}</p>
        <p>{{$item3->price}}</p>
        <p>{{$item3->brand}}</p>
        <p>{{$item3->category}}</p>
        <p>{{$item3->color}}</p>
    </li>
@endforeach
</body>
</html>
