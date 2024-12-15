<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriPoli extends Model
{
    use HasFactory;

    protected $table = "kategori_poli";
    protected $fillable = [
        'poli'
    ];
}
