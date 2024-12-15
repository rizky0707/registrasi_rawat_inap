<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratIstirahatDokter extends Model
{
    use HasFactory;

    protected $table = "surat_istirahat_dokter";


    protected $fillable = [
        'no_medrek', 'no_surat', 'nama', 'umur', 'golongan', 'jabatan', 'unit', 'lama_istirahat_mulai', 'lama_istirahat_akhir', 'jenis_kelamin',
        'dpjp'
    ];
    
}
