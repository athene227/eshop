<?php

use App\Http\Controllers\AuthController;
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
    return view('welcome');
});

Route::get('dashboard', [AuthController::class, 'dashboard']);
Route::get('login', [AuthController::class, 'loginView'])->name('loginView');
Route::post('login', [AuthController::class, 'login'])->name('login');
Route::get('signup', [AuthController::class, 'registerView'])->name('registerView');
Route::post('signup', [AuthController::class, 'register'])->name('register');
Route::get('singout', [AuthController::class, 'signout'])->name('signout');
