<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\User\PortfolioController;
use App\Http\Controllers\Auth\RegisterSubmitController;

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
    return view('common.index');
})->name('index');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/registerSubmit/{user}/registration', [RegisterSubmitController::class, 'index'])->name('registerSubmit');
Route::post('/registerUpdate', [RegisterSubmitController::class, 'update'])->name('registerUpdate');

Route::get('/dashboard', [PortfolioController::class, 'index'])->name('dashboard');
