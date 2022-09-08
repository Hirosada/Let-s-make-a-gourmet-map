<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;

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

//誰でもアクセスできる画面
Route::group(['middleware' => 'guest'], function() {
	Route::get('/member/register', [MemberController::class, 'register']);
	Route::post('/member/register', [MemberController::class, 'postRegiser'])->name('post_regiser');
});

//ログインしないとアクセスできない画面
Route::group(['middleware' => 'auth'], function () {

});