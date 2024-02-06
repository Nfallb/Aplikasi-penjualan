<?php

namespace App\Http\Controllers\Toko;

use App\Models\Item;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KontrolerItemToko extends Controller
{
    public function create()
    {
        return view('toko.item.tambah');
    }
    public function show(Item $item)
    {
        return view('toko.item.itemShow', compact('item'));
    }
}
