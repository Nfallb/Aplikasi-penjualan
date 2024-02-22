<?php

namespace App\Http\Controllers\Toko;

use Intervention\Image\Laravel\Facades\Image;
use App\Models\Item;
use App\Models\Kategori;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KontrolerItemToko extends Controller
{
    public function show(Item $item)
    {
        return view('toko.item.itemShow', compact('item'));
    }

    public function store()
    {
        $data_tervalidasi = request()->validate([
            'kategori_id' => [],
            'gambar' => ['image'],
            'nama_item' => ['string', 'max:30'],
            'harga' => ['integer'],
            'deskripsi' => ['string'],
        ]);
        // kode membuat data yang tadi
        // ke database
        $img_path = $data_tervalidasi['gambar']->store('product_imgs', 'public');
        $img = Image::read(public_path("storage/$img_path"));
        $img->cover(450, 300);
        $img->save();
        
        $data_tervalidasi['gambar'] = $img_path;
        $kategori = Kategori::find($data_tervalidasi['kategori_id']);
        $kategori->items()->create($data_tervalidasi);

        return redirect()->back();
    }
}
