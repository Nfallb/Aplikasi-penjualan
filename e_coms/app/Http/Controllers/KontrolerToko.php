<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KontrolerToko extends Controller
{
    public function index()
    {
        return view('main-page');
    }

    public function show()
    {
        return view('toko.profiltoko');
    }
}