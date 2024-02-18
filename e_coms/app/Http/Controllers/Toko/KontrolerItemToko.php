<?php

namespace App\Http\Controllers\Toko;

use Intervention\Image\Laravel\Facades\Image;
use App\Models\Item;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KontrolerItemToko extends Controller
{
public function store()
    {
        $data_tervalidasi = request()->validate([
            'kategori_id' => ['integer'],
            'gambar' => ['image'],
            'nama_item' => ['string', 'max:30'],
            'harga' => ['integer'],
            'deskripsi' => ['string'],
        ]);
        // kode membuat data yang tadi
        // ke database
        dd($data_tervalidasi);
        
    }
}
