<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriKelas extends Model
{
    use HasFactory;
    protected $table = "kategori_kelas";
    protected $fillable = [
        'kelas'
    ];

    public function kategori_kelasruangan()
    {   
        return $this->hasMany(KategoriKelasRuangan::class);
    }

    public function register_rinap()
    {   
        return $this->hasMany(RegisterRawatInap::class);
    }
}
