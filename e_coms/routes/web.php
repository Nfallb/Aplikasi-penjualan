<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/toko/register/{user}', [App\Http\Controllers\Toko\KontrolerRegisToko::class, 'show'])->name('toko.register');

Route::post('/toko/register/buat_toko', [App\Http\Controllers\Toko\KontrolerRegisToko::class, 'store'])->name('uploadDataToko');

Route::get('/toko/{toko}', [App\Http\Controllers\KontrolerToko::class, 'show'])->name('toko.show');
Route::get('/toko', [App\Http\Controllers\KontrolerToko::class, 'index'])->name('toko');

