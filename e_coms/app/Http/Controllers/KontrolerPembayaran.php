<?php

namespace App\Http\Controllers;

use App\Models\Keranjang;
use Illuminate\Http\Request;

class KontrolerPembayaran extends Controller
{
    public function checkout_show(Keranjang $keranjang)
    {
        \Midtrans\Config::$serverKey = 'SB-Mid-server-WhVopecyatYvUjOX2bx3VxRc';
        \Midtrans\Config::$isProduction = false;
        \Midtrans\Config::$isSanitized = true;
        \Midtrans\Config::$is3ds = true;

        $total = 0;
        foreach($keranjang->items as $item)
        {
            $total += $item->harga * $item->pivot->jumlah;
        }

        $parameter = [
            'transaction_details' => [
                'order_id' => rand(),
                'gross_amount' => $total,
            ],

            'customer_details' => [
                'first_name' => auth()->user()->name,
                'last_name' => auth()->user()->username,
                'email' => auth()->user()->email,
                'phone' => auth()->user()->phone,
            ],
        ];

        $snapToken = \Midtrans\Snap::getSnapToken($parameter);
        
        return redirect('https://app.sandbox.midtrans.com/snap/v2/vtweb/'.$snapToken);

        // vv legacy code vv
        // $total = 0;
        // foreach($keranjang->items as $item)
        // {
        //     $total += $item->harga * $item->pivot->jumlah;
        // }
        // return view('toko.checkout', compact('keranjang', 'total'));
    }
}
