<?php

namespace App\Http\Controllers;

use App\Models\Toko;
use Illuminate\Http\Request;

class KontrolerToko extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        return view('main-page');
    }

    public function show(Toko $toko)
    {
        return view('toko.profiltoko', ['toko' => $toko]);
    }
}