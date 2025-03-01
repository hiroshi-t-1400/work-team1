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
    @vite(['resources/css/app.css'])


</head>
<body>

    <div id="app">
        <div class="container">
            <h3 class="page-title">商品管理システム</h3>
        </div>
        {{-- ログイン用のフォームを設置 --}}
        <form action="" class="login-form form">
            <input type="email" name="email" placeholder="メールアドレス">
            <input type="password" name="password" placeholder="パスワード">
            <button type="submit" class="btn login-btn">ログイン</button>
        </form>
    </div>


</body>
</html>
