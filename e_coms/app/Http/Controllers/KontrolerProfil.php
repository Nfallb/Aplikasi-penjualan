<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class KontrolerProfil extends Controller
{
    public function show(User $user)
    {
        return view('profile.show', compact('user'));
    }
}
