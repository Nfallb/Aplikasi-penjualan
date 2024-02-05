<?php

namespace App\Http\Controllers\Toko;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class KontrolerRegisToko extends Controller
{
    public function _construct()
    {
        $this->middleware('auth');
    }

    public function show(User $user)
    {
        return view('toko.register', ['user' => $user]);
    }

    public function store()
    {
        $data_tervalidasi = request()->validate([
            'nama_toko' => ['string', 'max:30'],
            'deskripsi' => ['string'],
            'lokasi' => ['string'],
            'genre' => ['string'],
            'telephone' => ['string'],
            'sosmed' => ['string'],
        ]);
        // kode membuat data yang tadi
        // ke database
        auth()->user()->toko()->create(array_merge($data_tervalidasi));

        return redirect()->route('toko.show', ['toko' => auth()->user()->toko->id]);
    }
}