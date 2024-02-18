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
        $keranjangItems = auth()->user()->keranjang->items();
        $itemLama = $keranjangItems->find($item->id);
        $validated = request()->validate([
            'jumlah' => ['integer']
        ]);

        if($itemLama)
        {
            $jumlahLama = $itemLama->pivot->jumlah;
            $itemLama->pivot->update(['jumlah' => $jumlahLama+$validated['jumlah']]);
        }
        else
        {
            $new_item = $keranjangItems->attach($item->id, ['jumlah' => $validated['jumlah']]);
        }
        return redirect()->route('keranjang.show', ['keranjang' => auth()->user()->keranjang->id]);
    }

    public function keranjang_item_destroy(Item $item)
    {
        auth()->user()->keranjang->items()->detach($item->id);
        return redirect()->back();
    }
}
