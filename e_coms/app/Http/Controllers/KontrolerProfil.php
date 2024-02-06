<?php

namespace App\Http\Controllers;

use Intervention\Image\Laravel\Facades\Image;
use App\Models\User;
use Illuminate\Http\Request;

class KontrolerProfil extends Controller
{
    public function show(User $user)
    {
        return view('profile.show', compact('user'));
    }

    public function update()
    {
        // Validasi tipe data
        $dataValid = request()->validate([
            'name' => ['string'],
            'username' => ['string'],
            'email' => ['string'],
            'phone' => ['string'],
            'alamat' => ['string'],
            'pfp' => ['image'],
        ]);

        // Kode ngedit & nyimpan pfp
        $pfp_path = null;

        if(request('pfp'))
        {
            $pfp_path = $dataValid['pfp']->store('profile_pictures', 'public');
            $image = Image::read(public_path("storage/$pfp_path"));
            $image->cover(300,300);
            $image->save();
        }
        else
        {
            $pfp_path = auth()->user()->pfp;
        }

        $dataValid['pfp'] = $pfp_path;


        // Update semua data
        auth()->user()->update($dataValid);

        // Kembali ke view profil
        return redirect()->route('profile.show', ['user' => auth()->user()->id]);
    }
}
