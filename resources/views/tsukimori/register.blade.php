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
    <link rel="stylesheet" href="{{ asset('/css/style.css')}}">


</head>
<body>

    <div id="app">
        <div class="container">
            <h3 class="page-title italic">商品管理システム</h3>
            {{-- アカウント作成用のフォームを設置 --}}
            <form action="{{ route('UserRegister') }}" class="login-form form" method="POST">
                {{-- アカウント登録失敗エラーの表示
                UserRegisterControllerから送られてきた &errorsの中身があれば表示する
                all() でforeachで使える形にして $error １つずつ格納して全て表示する --}}
                @if ($errors->any())
                    <div class="alert">
                        <ul class="error-msg-list">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @csrf
                <div class="user-form-label">名前</div>
                <input type="text" name="name" placeholder="名前" value="たろう">
                <div class="user-form-label">メールアドレス</div>
                <input type="email" name="email" placeholder="メールアドレス" value="taro@example.com">
                <div class="user-form-label">パスワード</div>
                <input type="password" name="password" placeholder="パスワード" value="taropass">
                <div class="user-form-label">パスワード（確認）</div>
                <input type="password" name="password" placeholder="パスワード（確認）" value="taropass">

                    <input type="hidden" name="role" value="0" >
                    <label for="apply-role" class="role-label">
                    <input type="checkbox" name="role" id="apply-role" value="1" class="chk">
                        管理者
                    </label>

                <div class="btn-erea">
                    <button type="submit" class="btn login-btn">アカウント登録</button>
                    <a href="{{ route('login') }}">キャンセル</a>
                </div>
            </form>
        </div>
    </div>

</form>



</body>
</html>
