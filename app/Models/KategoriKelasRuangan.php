<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriKelasRuangan extends Model
{
    use HasFactory;

    protected $table = "kategori_kelasruangan";
    protected $fillable = [
        'id_kelas', 'ruangan'
    ];


    public function kategori_kelas()
    {
        return $this->belongsTo(KategoriKelas::class, 'id_kelas');
    }
    
    public function register_rinap()
    {   
        return $this->hasMany(RegisterRawatInap::class);
    }
}
