<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = [
        'nama_item',
        'harga',
        'deskripsi',
    ];

    public function toko()
    {
        return $this->belongsTo(Toko::class);
    }
}
