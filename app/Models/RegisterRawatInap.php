<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegisterRawatInap extends Model
{
    use HasFactory;

    protected $table = "registrasi_ris";
    protected $fillable = [
        'no_medrek', 'nama', 'umur', 'tgl_masuk', 'jenis_kelamin', 'r_rawat',
        'hak_ruangan', 'hak_kelas', 'penjamin', 'asal_poli', 'dpjp', 'diagnosa', 'keterangan'
    ];

    public function kategori_kelas()
    {
        return $this->belongsTo(KategoriKelas::class, 'hak_kelas');
    }

    // public function kategori_ruangan()
    // {
    //     return $this->belongsTo(KategoriKelasRuangan::class, 'hak_ruangan');
    // }
}
