<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    ホーム画面(仮)、コンフリクトしたら全部消してください（月森

    {{-- ログイン失敗エラーの表示
    AuthControllerから送られてきた &errorsの中身があれば表示する
    all() でforeachで使える形にして $error １つずつ格納して全て表示する --}}
    @if ($errors->any()) <!-- 何かエラーがあれば以下を実行 -->
    <div class="alert">
        <ul class="error-msg-list">
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @else <!-- エラーがなければ以下を実行 -->
        アカウント作成に成功しました。（もしくは直接このページを表示しました）
    @endif
</body>
</html>
