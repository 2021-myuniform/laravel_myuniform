<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>Topsの検索条件を設定してください</p>

    <form action="{{ route('registerChangeTops') }}" method="post">
        @csrf
        <input type="hidden" name="type" value="tops">
        <select name="gender" id="">
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select>
        <select name="target" id="">
            <option value="adult">Adult</option>
        </select>
        <select name="brand" id="">
            <option value="yonex">Yonex</option>
        </select>
        <select name="category" id="">
            <option value="long">Long</option>
            <option value="half">Half</option>
        </select>
        <select name="color" id="">
            <option value="black">黒</option>
            <option value="yellow">黄</option>
            <option value="blue">青</option>
            <option value="red">赤</option>
            <option value="pink">ピンク</option>
        </select>
        <input type="submit" value="Submit">
    </form>

</body>
</html>
