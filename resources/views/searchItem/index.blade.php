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
</body>
</html>