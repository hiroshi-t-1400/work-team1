<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <link rel="stylesheet" href="{{ asset('/css/tsukimori.css')}}">

</head>
<body style="background-color:antiquewhite">

<div id="app">

    {{-- ここからサイドバーに載せる内容 --}}
    <main class="side-container">

        <div class="side-wrapper">
            <H4 class="side-title italic">商品管理システム</H4>

            {{-- ログイン中のユーザー名を表示する --}}
            <div class="side-user-show p-2">
                ユーザー名<br>
                {{-- ユーザーの名前をクリックすると、ユーザー情報の編集ページを開く
                ToDo:user_idを編集ページに渡す？ ==> 森山さんと確認
                ToDo:Twitterクローンみたいにポップアップをはさむ？誤クリック対策になる？ --}}
                <a href="{{ url('/user_edit') }}" class="side-user-name">
                    @auth
                        {{ Auth::user()->name }}
                    @else
                        ｛ログアウト状態｝
                    @endauth
                </a>
            </div>

            <div class="side-page-list my-4">
                {{-- 商品管理機能ページリスト --}}
                <ul class="list-unstyled mt-3">
                    <li><a href="{{ url('/index') }}" class="side-subtitle nav-item">商品一覧</a></li>
                    <li class="ms-1"><a href="{{ url('/create') }}" class="side-subtitle branch nav-item">＞商品登録</a></li>
                </ul>
                {{-- ユーザー管理ページリスト --}}
                <ul class="list-unstyled mt-3">
                    <li><a href="{{ url('/user') }}" class="side-subtitle nav-item">ユーザー一覧</a></li>
                    <li class="ms-1"><a href="{{ url('/UserRegister') }}" class="side-subtitle branch nav-item">＞アカウント登録</a></li>
                </ul>
            </div>

            {{-- ホーム画面へのリンク --}}
            <a href="{{ url('/home') }}" class="side-back-home-link">
                ホーム画面へ
            </a>

            {{-- どこでもログアウトボタン --}}
            <form id="logout-form" action="{{ route('logout') }}" method="POST">
            @csrf
                <button type="submit" class="my-2 side-logout-btn">ログアウト</button>
            </form>



        </div>

    </main>
</div>
</body>
</html>
