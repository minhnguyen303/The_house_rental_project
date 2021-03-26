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

Route::get('/', function () {
    return redirect()->route('house.index');
})->name('home');

Route::prefix('login')->group(function () {
    // Normal login
    Route::get('/', [AuthController::class, 'showPageLogin'])->name('auth.login');
    Route::post('/', [AuthController::class, 'login'])->name('login');

    // Login with google
    Route::get('/google', [AuthController::class, 'loginWithGoogle'])->name('login.google');
    Route::get('/google/callback', [AuthController::class, 'loginWithGoogleCallBack'])->name('login.google.callback');
});
Route::get('/register',[AuthController::class,'showPageRegister'])->name('auth.register');
Route::post('/register',[AuthController::class,'register'])->name('register');
Route::get('logout',[AuthController::class,'logout'])->name('logout');
Route::get('/change_password',[AuthController::class,'pageChangePassword'])->name('auth.change_password');
Route::post('/change_password',[AuthController::class,'changePassword'])->name('change_password');

Route::prefix('houses')->group(function () {
    Route::get('/', [HouseController::class, 'index'])->name('house.index');
    Route::get('/list', [HouseController::class, 'list'])->name('house.list');
    Route::get('/info/{id}', [HouseController::class, 'info'])->name('house.info');
    Route::middleware('auth')->group(function () {
        Route::get('/create', [HouseController::class, 'create'])->name('house.create');
        Route::post('/store', [HouseController::class, 'store'])->name('house.store');
        Route::get('/edit/{id}', [HouseController::class, 'edit'])->name('house.edit');
        Route::post('/update/{id}', [HouseController::class, 'update'])->name('house.update');
    });
});
