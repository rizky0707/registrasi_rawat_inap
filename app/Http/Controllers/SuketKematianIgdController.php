<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SuketKematianIgd;
use App\Models\KategoriDokter;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\RegisterRawatInap;
use App\Models\KategoriRuangRawat;
use App\Models\KategoriKelas;
use App\Models\KategoriKelasRuangan;
use App\Models\KategoriPenjamin;
use App\Models\KategoriPoli;
use Carbon\Carbon;


class SuketKematianIgdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $suket = SuketKematianIgd::all();
        return view('admin.suket_kematian_igd.index', compact('suket'));
    }

    public function print_suket_igd()
    {
        if (request()->start_date || request()->end_date) {
            $start_date = Carbon::parse(request()->start_date)->toDateTimeString();
            $end_date = Carbon::parse(request()->end_date)->toDateTimeString();
            $suket = SuketKematianIgd::whereBetween('created_at',[$start_date,$end_date])->get();
        } else {
            $suket = SuketKematianIgd::latest()->get();
        }
        return view('admin.laporan.suket_igd.print', compact('suket', 'start_date', 'end_date'));

    }

    public function laporan_suket_igd()
    {
        if (request()->start_date || request()->end_date) {
            $start_date = Carbon::parse(request()->start_date)->toDateTimeString();
            $end_date = Carbon::parse(request()->end_date)->toDateTimeString();
            $suket = SuketKematianIgd::whereBetween('created_at',[$start_date,$end_date])->get();
        } else {
            $suket = SuketKematianIgd::latest()->get();
        }
        return view('admin.laporan.suket_igd.index', compact('suket'));

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
        return view('admin.suket_kematian_igd.create', compact('kategori_dokter', 'kategori_rawat', 'kategori_kelas', 'kategori_penjamin', 'kategori_poli', 'kategori_kelasruangan'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        SuketKematianIgd::create($request->all());
        return redirect()->route('suket_kematian_igd.index')->with('success', 'Data Berhasil Di Tambahkan');

    }

    public function suket_pasien_igd($id)
    {
        $suket_pasien_igd = SuketKematianIgd::findorfail($id);
        return view('admin.suket_kematian_igd.suket_pasien_template', compact('suket_pasien_igd'));

       
    }

    public function suket_igd_pdf($id)
    {
        $pdf = SuketKematianIgd::findorfail($id);
        $data = compact('pdf');
        $pdf = PDF::loadView('admin.suket_kematian_igd.suket_pasien_pdf', $data);
        return $pdf->download('suket_kematian_igd.pdf');

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
        $edit = SuketKematianIgd::findorfail($id);
        $kategori_dokter = KategoriDokter::all();
        $kategori_rawat = KategoriRuangRawat::all();
        $kategori_kelas = KategoriKelas::all();
        $kategori_penjamin = KategoriPenjamin::all();
        $kategori_poli = KategoriPoli::all();
        $kategori_kelasruangan = KategoriKelasRuangan::all();

        return view('admin.suket_kematian_igd.edit', compact('edit', 'kategori_kelasruangan', 'kategori_rawat', 'kategori_dokter', 'kategori_kelas', 'kategori_penjamin', 'kategori_poli'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SuketKematianIgd $suket_kematian_igd)
    {
        $suket_kematian_igd->update($request->all());
        return redirect()->route('suket_kematian_igd.index')->with('success', 'Data Berhasil Di Update');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $suket_pasien_igd = SuketKematianIgd::findorfail($id);
        $suket_pasien_igd->delete();
        return redirect()->route('suket_kematian_igd.index')->with('success', 'Data Berhasil Di Delete');
    }
}
