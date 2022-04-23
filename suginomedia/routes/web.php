<?php

use App\Http\Controllers\FoodstuffController; 
use Illuminate\Support\Facades\Route;

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

// 本のダッシュボード表示
Route::get('/toppage', [FoodstuffController::class, 'index']);

// 新「本」を追加
Route::post('/foodstuffs', [FoodstuffController::class, 'store']);

//「本」の更新画面表示
Route::get('/foodstuffsedit/{foodstuff}',[FoodstuffController::class, 'edit']);

//「本」の更新処理
Route::post('foodstuffs/update',[FoodstuffController::class, 'update']);

// 本を削除
Route::delete('/foodstuff/{foodstuff}', [FoodstuffController::class, 'destroy']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// 詳細表示
Route::get('/foodstuffs/{foodstuff}',[FoodstuffController::class, 'show']);
