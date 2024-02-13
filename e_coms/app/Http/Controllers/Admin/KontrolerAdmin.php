<?php

namespace App\Http\Controllers\Admin;

use App\Models\Kategori;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KontrolerAdmin extends Controller
{
    public function index_dashboard()
    {
        return view('admin.dashboard');
    }

    public function index_kategori()
    {
        $kategoris = Kategori::paginate(5);
        return view('admin.kategori', compact('kategoris'));
    }

    public function index_kategori_items(Kategori $kategori)
    {
        $items = $kategori->items()->paginate(5);
        return view('admin.item', compact('items'));
    }
}
