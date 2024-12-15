<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriPenjamin extends Model
{
    use HasFactory;

    protected $table = "kategori_penjamin";
    protected $fillable = [
        'penjamin'
    ];
}
