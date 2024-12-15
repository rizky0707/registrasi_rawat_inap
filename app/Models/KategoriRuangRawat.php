<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriRuangRawat extends Model
{
    use HasFactory;

    protected $table = "kategori_ruang_rawat_";
    protected $fillable = [
        'ruang_rawat'
    ];

   

}
