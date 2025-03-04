<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    {{-- @vite(['resources/css/app.css'])  ToDo:npm installとかやる  --}}


</head>
<body>

    <h1>商品管理システム</h1>
    <p>ホーム画面へようこそ</p>
    <p>月森が動作確認のために作った仮のホーム画面です。</p>
    <p>森本さんのホーム画面のディレクトリが確定したら /routes/web.php と関連付けをします。</p>
    <p>月森が対応するまで、必要であれば下のリンクを編集して動作確認に使ってください。</p>

        <a href="{{ url('home') }}">

            <div class="temp-about-to-home" style="margin:5rem; text-align:center; width:150px; height:30px; background-color:orange;">
                ホーム画面へ
            </div>
        </a>
    <form action="{{ route('logout') }}" class="logout-form" method="POST">
        @csrf
        <button type="submit" class="btn">ログアウト</button>
    </form>

</body>
</html>
