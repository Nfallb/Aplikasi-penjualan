<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KontrolerProfil extends Controller
{
    public function show()
    {
        return view('profile.show');
    }
}
