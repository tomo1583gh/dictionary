<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DictionaryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//検索画面（初期表示も含む）
Route::get('/', [DictionaryController::class, 'index'])->name('dictionary.index');

//登録画面表示
Route::get('/create', [DictionaryController::class, 'create'])->name('dictionary.create');

//登録処理（フォーム送信時）
Route::post('/create', [DictionaryController::class, 'store'])->name('dictionary.store');

//認証機能（ログイン・ログアウトなど）
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
