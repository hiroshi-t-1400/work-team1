<?php

use Illuminate\Support\Facades\Route;
// ログイン認証用コントローラーをこのファイル内で使うよ！という宣言
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\User\UserRegisterController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// http://127.0.0.1:8000 を開いた時に開くページをview('  ')で決めておく
// 画面設計にwelcomeはないので、おいおいどこかに決める。
// 森本さん作成の Route::get('/')　と重なっているのでコメントにしてよけています。[月森]
// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/index', [App\Http\Controllers\ItemController::class, 'index']);
Route::get('/side', function() {
    return view('/side');
    // return view('tsukimori.side'); // 
});
Route::get('/', [App\Http\Controllers\ItemController::class, 'index']);
Route::get('/items', [App\Http\Controllers\ItemController::class, 'index']);


// 動作確認用の仮のホーム画面のルーティング（月森
// 仮のホーム画面 home.blade.phpも作ってありますがほぼ白紙です
Route::get('/home', function() {
    return view('/morimotos.home');
})->name('home');

// ユーザー登録画面を表示
Route::get('/tsukimori.user-register', [UserRegisterController::class, 'showUserRegister'])->name('showUserRegister');
// アカウント作成コントローラ呼び出し
Route::post('/tsukimori.user-register', [UserRegisterController::class, 'UserRegister'])->name('UserRegister');

// ログイン画面を表示する
Route::get('/login', function () {
    return view('/tsukimori.login');
})->name('login');

// ログイン画面でログインボタンを押したらログイン認証用のコントローラーを呼び出す
Route::post('/login', [AuthController::class, 'login'])->name('login');
// ログアウトボタンを押したらログイン認証用のコントローラーを呼び出してログアウトする
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
