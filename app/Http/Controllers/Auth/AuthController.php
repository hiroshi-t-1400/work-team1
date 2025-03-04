<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
// 認証用のAuthファサードを使用するため
use Illuminate\Support\Facades\Auth;
// Authディレクトリを作ったのでControllerの元のディレクトリを明示
use App\Http\Controllers\Controller;


/**
 * ログイン認証用のコントローラー
 */
class AuthController extends Controller
{
    /**
     * ログイン認証を行う
     *
     * １，ログイン画面から送られてきたユーザー情報をバリデーション
     * ２，バリデーションのエラーがあったらエラーを表示する
     * ３，ログイン認証を誤って繰り返さないようにする
     *
     * @param Request $request ログイン画面から送られてきたPOST-formの中身
     * @return redirect|$error
     */
    public function login(Request $request):RedirectResponse // :RedirectResponse 返り値はResponse型ですよ、というメモ
    {
        // バリデーション、エラーがあったらログイン画面に戻る（validate( )の標準機能）
        $this->validate($request,[
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Auth::attempt　→→ usersテーブルのemail、passwordと、さっき送られてきた$requestの値が同じか調べる　→　同じなら true でifが実行される
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // ブラウザのセッション情報を再生成(regenerate)して、ログインしようとする動作をリセットする
            $request->session()->regenerate();
            // aboutページ(月森動作確認用のページ)に遷移する
            // ToDo:森本さんのhome画面ができたら編集します
            return redirect()->intended('about');
        }

        // ユーザー情報のメールアドレスが間違っていたらエラーエラーメッセージを表示させる
        return back()->withErrors([
            'email' => 'アカウント登録の情報が間違っています。'
        ]);
    }

    /**
     * ログアウトをする
     *
     * laravel標準のAuthファサード(::)機能でログアウトする
     * ブラウザで記憶しているセッション情報をリセットする
     *
     * @param Request $request
     * @return redirect
     */
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate(); // セッションを無効に
        $request->session()->regenerateToken(); // CSRFトークンを再生成・リセット
        return redirect('login');
    }
}
