<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CekmutasiController;
use App\Http\Controllers\FormulirController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\HomeController;
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
    return view('frontend/app');
});
Route::get('/formpengisian', function () {
    return view('pageusers');
});
Route::post('/insert', [FormulirController::class, 'insert']);

//auth
Route::get('register', [LoginController::class, 'register'])->name('register');
Route::post('register', [LoginController::class, 'register_action'])->name('register.action');
Route::get('login', [LoginController::class, 'login'])->name('login');
Route::post('login', [LoginController::class, 'login_action'])->name('login.action');
Route::get('password', [LoginController::class, 'password'])->name('password');
Route::post('password', [LoginController::class, 'password_action'])->name('password.action');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');
Route::get('home', [LoginController::class, 'home'])->name('home');