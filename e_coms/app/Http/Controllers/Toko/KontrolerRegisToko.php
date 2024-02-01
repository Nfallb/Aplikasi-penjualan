<?php

namespace App\Http\Controllers\Toko;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
        // kode membuat data yang tadi
        // ke database
        auth()->user()->toko()->create([
            'user_id' => auth()->user()->id,
            'nama_toko' => request('nama_toko'),
            'deskripsi' => request('deskripsi'),
            'lokasi'   => request('lokasi'),
            'deskripsi' => request('deskripsi'),
            'genre' => request('genre'),
            'telephone' => request('telephone'),
            'sosmed' => request('sosmed')
        ]);

        return redirect()->route('toko.show', ['toko' => auth()->user()->toko()->id]);
    }
}