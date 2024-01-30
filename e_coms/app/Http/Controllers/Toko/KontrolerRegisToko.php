<?php

namespace App\Http\Controllers\Toko;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KontrolerRegisToko extends Controller
{
    public function show(User $user)
    {
        return view('toko.register', ['user' => $user]);
    }

    public function create()
    {
        
    }
}