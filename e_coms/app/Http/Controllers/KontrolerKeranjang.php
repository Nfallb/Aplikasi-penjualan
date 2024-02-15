<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Keranjang;
use Illuminate\Http\Request;

class KontrolerKeranjang extends Controller
{
    public function show(Keranjang $keranjang)
    {
        return view('user.cart', compact('keranjang'));
    }

    public function keranjang_item_store(Item $item)
    {
        $validated = request()->validate([
            'jumlah' => ['integer']
        ]);

        $new_item = auth()->user()->keranjang->items()->attach($item->id, ['jumlah' => $validated['jumlah']]);;
        
        return redirect()->route('keranjang.show', ['keranjang' => auth()->user()->keranjang->id]);
    }
}
