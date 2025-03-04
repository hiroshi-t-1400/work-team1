<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// 認証用のAuthファサードを使用するため
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
// データベースを扱うためUserモデルを呼び出せるようにする
use App\Models\User;


class UserRegisterController extends Controller
{
    /**
     * アカウント登録画面を表示
     *
     * ToDo:管理者権限によるアクセス制限を実装
     *
     * @return url
     */
    public function showUserRegister()
    {
        return view('/tsukimori.register');
    }

    public function UserRegister(Request $request)
    {
        $this->validate($request,[
            // バリデーションのチェックしない動作確認用
            'name' => 'required|string', // 必須、文字列
            'email' => 'required|email|unique:users', // 必須、@を含むアドレス、最大文字数40文字
            'password' => 'required', // 必須
            'role' => 'boolean', // ０か１
            // バリデーションする本番用
            // 'name' => 'required|string|max:20', // 必須、文字列、最大文字数20文字
            // 'email' => 'required|email|max:40|unique:users', // 必須、@を含むアドレス、最大文字数40文字、uesrsテーブルに同じメールアドレスがあったらダメ
            // 'password' => 'required|between:8,12|confirmed', // 必須、8～12文字、パスワード確認用が同じか、ToDo:Password::rule
            // 'role' => 'boolean', // ０か１
        ]);

        // dd($request);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
        ]);

        Auth::login($user);

        return redirect()->route('home');
    }
}
