<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/mainPage.css') }}">

</head>
<body>
    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="iconImgArea">
        <p>ユーザーアイコン</p>
        <form
         method="post"
         action="{{ route('upload_imageOpen') }}"
         enctype="multipart/form-data"
>
        @csrf
        <input type="file" name="image" accept="image/png, image/jpeg">
        <input type="submit" value="Upload">
        </form>
    </div>
</body>
</html>