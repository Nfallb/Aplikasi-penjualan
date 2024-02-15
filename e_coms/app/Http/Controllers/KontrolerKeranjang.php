<?php

namespace App\Http\Controllers;

use App\Models\Keranjang;
use Illuminate\Http\Request;

class KontrolerKeranjang extends Controller
{
    public function show(Keranjang $keranjang)
    {
        return view('user.cart', compact('keranjang'));
    }
}
