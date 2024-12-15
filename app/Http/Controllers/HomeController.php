<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RegisterRawatInap;
use App\Models\SuketKematian;
use App\Models\SuratIstirahatDokter;
use App\Models\KategoriDokter;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $pasien = RegisterRawatInap::all()->count();
        $suket_kematian = SuketKematian::all()->count();
        $surat_istirahat = SuratIstirahatDokter::all()->count();
        $dokter = KategoriDokter::all()->count();
        $data = compact('pasien', 'suket_kematian', 'surat_istirahat', 'dokter');
        return view('home', $data);
    }
}
