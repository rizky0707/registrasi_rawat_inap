<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuketKematianIgd extends Model
{
    use HasFactory;

    protected $table = "suket_kematian_igd";

    protected $fillable = [
        'no_medrek', 
        'no_surat', 
        'nama', 
        'umur', 
        'alamat_tinggal', 
        'alamat_ktp', 
        'no_alamat', 
        'rt',
        'rw',
        'kelurahan',
        'kecamatan',
        'kota_kab',
        'kode_pos',
        'telepon_hp',
        'pekerjaan',
        'nama_ayah_suami',
        'nama_ibu_istri',
        'hari_rawat',
        'tanggal_rawat',
        'ruang',
        'kelas', 
        'hari_kematian', 
        'tgl_kematian', 
        'pukul', 
        'jenis_kelamin', 
        'penjamin', 
        'dpjp', 
        'asal_poli', 
        'status_infeksi', 
    ];
}
