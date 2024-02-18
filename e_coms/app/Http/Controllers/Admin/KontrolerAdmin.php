<?php

namespace App\Http\Controllers\Admin;

use App\Models\Kategori;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Middleware\AdminAccess;

class KontrolerAdmin extends Controller
{
    public function __construct()
    {
        $this->middleware(AdminAccess::class);
    }

    public function index_dashboard()
    {
        return view('admin.dashboard');
    }

    public function index_kategori()
    {
        $kategoris = Kategori::paginate(5);
        return view('admin.kategori', compact('kategoris'));
    }

    public function index_kategori_items(Kategori $kategori)
    {
        $items = $kategori->items()->paginate(5);
        return view('admin.item', compact('items', 'kategori'));
    }

    public function index_users()
    {
        $users = User::paginate(10);
        return view('admin.user', compact('users'));
    }
}
