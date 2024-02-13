<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $fillable = [
        'nama',
        'deskripsi',
    ];

    public function items()
    {
        return $this->hasMany(Item::class);
    }
}
