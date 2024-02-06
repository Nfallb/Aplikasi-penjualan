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

// Route register toko
Route::get('/toko/register', [App\Http\Controllers\Toko\KontrolerRegisToko::class, 'show'])->name('toko.register');
Route::post('/toko/register/buat_toko', [App\Http\Controllers\Toko\KontrolerRegisToko::class, 'store'])->name('uploadDataToko');

// Route toko
Route::get('/toko/{toko}', [App\Http\Controllers\KontrolerToko::class, 'show'])->name('toko.show');
Route::get('/toko', [App\Http\Controllers\KontrolerToko::class, 'index'])->name('toko');

// Route profile
Route::get('/profile/{user}', [App\Http\Controllers\KontrolerProfil::class, 'show'])->name('profile.show');
Route::patch('/profile/update', [App\Http\Controllers\KontrolerProfil::class, 'update'])->name('profile.update');

// Route admin
Route::get('/admin/{admin}', [App\Http\Controllers\Admin\KontrolerAdmin::class, 'show'])->name('admin.show');