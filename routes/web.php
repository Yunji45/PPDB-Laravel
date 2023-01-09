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
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');

Route::get('/register', [LoginController::class, 'register'])->name('register');

Route::get('home', [HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');
