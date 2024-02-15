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

// Route item
Route::get('/item/create', [App\Http\Controllers\Toko\KontrolerItemToko::class, 'create'])->name('item.create');
Route::get('/item/{item}', [App\Http\Controllers\Toko\KontrolerItemToko::class, 'show'])->name('item.show');
Route::post('/item/buat_item', [App\Http\Controllers\Toko\KontrolerItemToko::class, 'store'])->name('uploadDataItem');

// Route profile
Route::get('/profile/{user}', [App\Http\Controllers\KontrolerProfil::class, 'show'])->name('profile.show');
Route::patch('/profile/update', [App\Http\Controllers\KontrolerProfil::class, 'update'])->name('profile.update');

// Route admin
Route::get('/admin/dashboard', [App\Http\Controllers\Admin\KontrolerAdmin::class, 'index_dashboard'])->name('admin.index.dashboard');
Route::get('/admin/kategori', [App\Http\Controllers\Admin\KontrolerAdmin::class, 'index_kategori'])->name('admin.index.kategori');
Route::get('/admin/{kategori}/item', [App\Http\Controllers\Admin\KontrolerAdmin::class, 'index_kategori_items'])->name('admin.index.kategori.items');

// Route kategori
/*
    v Note buat nanya di stackoverflow. kacangin aja, -Dinar v
    no way to alternate between patch and delete in the FE (not that i know of),
    so both of these route method is set to post
    as a work around. fix if and when possible
*/
Route::post('/kategori/update', [App\Http\Controllers\KontrolerKategori::class, 'update'])->name('kategori.update');
Route::post('/kategori', [App\Http\Controllers\KontrolerKategori::class, 'store'])->name('kategori.store');
Route::post('/kategori/destroy', [App\Http\Controllers\KontrolerKategori::class, 'destroy'])->name('kategori.destroy');

// Route keranjang
Route::get('keranjang/{keranjang}', [App\Http\Controllers\KontrolerKeranjang::class, 'show'])->name('keranjang.show');