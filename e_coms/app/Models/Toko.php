<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Toko extends Model
{
    protected $fillable = [
        'nama_toko',
        'genre',
        'lokasi',
        'deskripsi',
        'telephone',
        'sosmed',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
