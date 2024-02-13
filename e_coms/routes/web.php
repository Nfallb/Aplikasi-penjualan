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

// Home
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route item toko
Route::get('/item/create', [App\Http\Controllers\Toko\KontrolerItemToko::class, 'create'])->name('item.create');
Route::get('/item/{item}', [App\Http\Controllers\Toko\KontrolerItemToko::class, 'show'])->name('item.show');
Route::post('/item/buat_item', [App\Http\Controllers\Toko\KontrolerItemToko::class, 'store'])->name('uploadDataItem');

// Route profile
Route::get('/profile/{user}', [App\Http\Controllers\KontrolerProfil::class, 'show'])->name('profile.show');
Route::patch('/profile/update', [App\Http\Controllers\KontrolerProfil::class, 'update'])->name('profile.update');

// Route admin
Route::get('/admin/dashboard', [App\Http\Controllers\Admin\KontrolerAdmin::class, 'index_dashboard'])->name('admin.index.dashboard');
Route::get('/admin/kategori', [App\Http\Controllers\Admin\KontrolerAdmin::class, 'index_kategori'])->name('admin.index.kategori');

// Route kategori
Route::patch('/kategori/update', [App\Http\Controllers\KontrolerKategori::class, 'update'])->name('kategori.update');