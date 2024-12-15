<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RegisterRawatInap;
use App\Models\KategoriDokter;
use App\Models\KategoriRuangRawat;
use App\Models\KategoriKelas;
use App\Models\KategoriKelasRuangan;
use App\Models\KategoriPenjamin;
use App\Models\KategoriPoli;
use DB;
use Carbon\Carbon;

class RegisterRawatInapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->start_date || request()->end_date) {
            $start_date = Carbon::parse(request()->start_date)->toDateTimeString();
            $end_date = Carbon::parse(request()->end_date)->toDateTimeString();
            $register = RegisterRawatInap::whereBetween('created_at',[$start_date,$end_date])->get();
        } else {
            $register = RegisterRawatInap::latest()->get();
        }
        return view('admin.register_pasien_rawat_inap.index', compact('register'));
    }

    public function print()
    {
        if (request()->start_date || request()->end_date) {
            $start_date = Carbon::parse(request()->start_date)->toDateTimeString();
            $end_date = Carbon::parse(request()->end_date)->toDateTimeString();
            $register = RegisterRawatInap::whereBetween('created_at',[$start_date,$end_date])->get();
        } else {
            $register = RegisterRawatInap::latest()->get();
        }
        return view('admin.laporan.rinap.print', compact('register', 'start_date', 'end_date'));

    }

    public function laporan_register_rinap()
    {
        if (request()->start_date || request()->end_date) {
            $start_date = Carbon::parse(request()->start_date)->toDateTimeString();
            $end_date = Carbon::parse(request()->end_date)->toDateTimeString();
            $register = RegisterRawatInap::whereBetween('created_at',[$start_date,$end_date])->get();
        } else {
            $register = RegisterRawatInap::latest()->get();
        }
        return view('admin.laporan.rinap.index', compact('register'));

    }
    



    public function GetKelasRuangan($id){
        echo json_encode(DB::table('kategori_kelasruangan')->where('id_kelas', $id)->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori_dokter = KategoriDokter::all();
        $kategori_rawat = KategoriRuangRawat::all();
        $kategori_kelas = KategoriKelas::all();
        $kategori_penjamin = KategoriPenjamin::all();
        $kategori_poli = KategoriPoli::all();
        $kategori_kelasruangan = KategoriKelasRuangan::all();
        return view('admin.register_pasien_rawat_inap.create', compact('kategori_kelasruangan', 'kategori_poli', 'kategori_penjamin', 'kategori_dokter', 'kategori_rawat', 'kategori_kelas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        RegisterRawatInap::create($request->all());
        return redirect()->route('register_pasien.index')->with('success', 'Data Berhasil Di Tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = RegisterRawatInap::findorfail($id);
        $kategori_dokter = KategoriDokter::all();
        $kategori_rawat = KategoriRuangRawat::all();
        $kategori_kelas = KategoriKelas::all();
        $kategori_penjamin = KategoriPenjamin::all();
        $kategori_poli = KategoriPoli::all();
        $kategori_kelasruangan = KategoriKelasRuangan::all();

        return view('admin.register_pasien_rawat_inap.edit', compact('edit', 'kategori_kelasruangan', 'kategori_rawat', 'kategori_dokter', 'kategori_kelas', 'kategori_penjamin', 'kategori_poli'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RegisterRawatInap $register_pasien)
    {
        $register_pasien->update($request->all());
        return redirect()->route('register_pasien.index')->with('success', 'Data Berhasil Di Update');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $register_pasien = RegisterRawatInap::findorfail($id);
        $register_pasien->delete();
        return redirect()->route('register_pasien.index')->with('success', 'Data Berhasil Di Delete');
    }
}
