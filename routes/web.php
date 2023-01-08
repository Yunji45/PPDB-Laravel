<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CekmutasiController;
use App\Http\Controllers\FormulirController;
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
Route::get('/login', function () {
    return view('auth/login');
});
Route::get('/formpengisian', function () {
    return view('pageusers');
});
Route::post('/insert', [FormulirController::class, 'insert']);