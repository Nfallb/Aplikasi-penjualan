<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KontrolerKategori extends Controller
{
    public function store()
    {
        $validatedData = request()->validate([
            'nama' => ['string', 'max:25', 'min:1'],
            'deskripsi' => ['string'],
        ]);

        Kategori::create($validatedData);
        return redirect()->back();
    }

    public function manipulate(Request $request, Kategori $kategoris)
    {
        $selectedKategoris = $kategoris->whereIn('id', $request);
        if($request['action'] === 'update')
        {
            foreach($selectedKategoris->get() as $kategori)
            {
                $kategori->update([
                    'nama' => $request[$kategori->id . '-nama'],
                    'deskripsi' => $request[$kategori->id . '-deskripsi']
                ]);
            }
        }
        else if($request['action'] === 'delete')
        {
            $selectedKategoris->delete();
        }

        return redirect()->back();
    }
}