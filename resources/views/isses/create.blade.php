@extends('items.layout')

@section('content')
<div class="container">
    <div class="balance">

        <!-- ログインユーザー名を表示 -->


        <!-- 商品登録 -->
        <h4 class="mb-4">商品登録</h4>

        <form action="/itemCreate" method="POST">
            @csrf
            <div class="mb-3">
                <label for="date" class="form-label">購入日</label>
            </div>
            <div>
                <input type="date" name="date" id="date" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="item_name" class="form-label">商品名</label>
            </div>
            <div>
                <input type="text" name="item_name" id="item_name" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="category_id" class="form-label">カテゴリ</label>
            </div>
            <div>
                <select name="category_id" id="category_id" class="form-select">
                    <option value=""></option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="3">3</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">金額</label>
            </div>
            <div>
                <input type="text" name="price" id="price" class="form-control">
            </div>

            <div class="mb-3">
                <label for="detail" class="form-label">詳細</label>
            </div>
            <div>
                <textarea name="detail" id="detail" class="form-control" rows="3"></textarea>
            </div>

            <!-- 登録ボタン -->
            <button type="submit" class="btn new-register-btn">登録</button>
        </form>

    </div>
</div>

@endsection