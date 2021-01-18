<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="http://localhost/laravel_myuniform/public/searchPants/find" method="post">
        @csrf
        <p>最大値</p>
        <input type="text" name="inputHigh">
        <p>最小値</p>
        <input type="text" name="inputLow">
        <div>
            <select name="colors" id="colors">
                <option value="black">ブラック</option>
                <option value="blue">ブルー</option>
            </select>
        </div>
        <input type="submit" value="find">
    </form>

    @if (isset($items))
    @foreach ($items as $item)
    {{-- <table> --}}
                <form action="http://localhost/laravel_myuniform/public/searchPants/add" method="post">
                    <div style="background-color: gray">
                        @csrf
                         <tr><th>Data</th></tr>
                        <tr>
                        <td>{{$item->id}}</td>
                        <input type="hidden" name="itemId" value="{{$item->id}}">
                        <td>{{$item->price}}</td>
                        <input type="hidden" name="price" value="{{$item->price}}">
                        <td>{{$item->brand}}</td>
                        <input type="hidden" name="brand" value="{{$item->brand}}">
                        <td>{{$item->color}}</td>
                        <input type="hidden" name="color" value="{{$item->color}}">
                         </tr>
                         <input type="submit" value="register">
                        </form>
                    </div>
        {{-- </table> --}}
    @endforeach
    @endif
</body>
</html>