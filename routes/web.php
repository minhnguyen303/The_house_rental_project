<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HouseController;
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

Route::get('/', [HouseController::class, 'index'])->name('home');

Route::prefix('login')->group(function () {
    // Normal login
    Route::get('/', [AuthController::class, 'showPageLogin'])->name('page.login');
    Route::post('/', [AuthController::class, 'login'])->name('login');

    // Login with google
    Route::get('/google', [AuthController::class, 'loginWithGoogle'])->name('login.google');
    Route::get('/google/callback', [AuthController::class, 'loginWithGoogleCallBack'])->name('login.google.callback');

});
Route::get('/register',[AuthController::class,'showPageRegister'])->name('page.register');
Route::post('/register',[AuthController::class,'register'])->name('register');

Route::prefix('houses')->group(function () {
    Route::get('/', [HouseController::class, 'index'])->name('house.list');
    Route::get('/{id}', [HouseController::class, 'info'])->name('house.info');
});
