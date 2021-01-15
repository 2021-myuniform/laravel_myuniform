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
        <table>
            <tr><th>Data</th></tr>
            <tr>
                <td>{{$item->price}}</td>
                <td>{{$item->brand}}</td>
                <td>{{$item->color}}</td>
            </tr>
        </table>
        @endforeach
    @endif
</body>
</html>