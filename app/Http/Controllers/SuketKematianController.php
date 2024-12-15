<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SuketKematian;
use App\Models\KategoriDokter;
use App\Models\User;
use App\Models\RegisterRawatInap;
use App\Models\KategoriRuangRawat;
use App\Models\KategoriKelas;
use App\Models\KategoriKelasRuangan;
use App\Models\KategoriPenjamin;
use App\Models\KategoriPoli;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;


class SuketKematianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $suket = SuketKematian::all();
        return view('admin.suket_kematian.index', compact('suket'));
    }

    public function print_suket_ri()
    {
        if (request()->start_date || request()->end_date) {
            $start_date = Carbon::parse(request()->start_date)->toDateTimeString();
            $end_date = Carbon::parse(request()->end_date)->toDateTimeString();
            $suket = SuketKematian::whereBetween('created_at',[$start_date,$end_date])->get();
        } else {
            $suket = SuketKematian::latest()->get();
        }
        return view('admin.laporan.suket_ri.print', compact('suket', 'start_date', 'end_date'));

    }

    public function laporan_suket_ri()
    {
        if (request()->start_date || request()->end_date) {
            $start_date = Carbon::parse(request()->start_date)->toDateTimeString();
            $end_date = Carbon::parse(request()->end_date)->toDateTimeString();
            $suket = SuketKematian::whereBetween('created_at',[$start_date,$end_date])->get();
        } else {
            $suket = SuketKematian::latest()->get();
        }
        return view('admin.laporan.suket_ri.index', compact('suket'));

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
        return view('admin.suket_kematian.create', compact('kategori_dokter', 'kategori_rawat', 'kategori_kelas', 'kategori_penjamin', 'kategori_poli', 'kategori_kelasruangan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        SuketKematian::create($request->all());
        return redirect()->route('suket_kematian.index')->with('success', 'Data Berhasil Di Tambahkan');
    }


    public function suket_pasien_template($id)
    {
        $suket_pasien_template = SuketKematian::findorfail($id);
        return view('admin.suket_kematian.suket_pasien_template', compact('suket_pasien_template'));

       
    }

    public function suket_pasien_pdf($id)
    {
        $pdf = SuketKematian::findorfail($id);
        $data = compact('pdf');
        $pdf = PDF::loadView('admin.suket_kematian.suket_pasien_pdf', $data);
        return $pdf->download('suket_kematian.pdf');

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
        $edit = SuketKematian::findorfail($id);
        $kategori_dokter = KategoriDokter::all();
        $kategori_rawat = KategoriRuangRawat::all();
        $kategori_kelas = KategoriKelas::all();
        $kategori_penjamin = KategoriPenjamin::all();
        $kategori_poli = KategoriPoli::all();
        $kategori_kelasruangan = KategoriKelasRuangan::all();

        return view('admin.suket_kematian.edit', compact('edit', 'kategori_kelasruangan', 'kategori_rawat', 'kategori_dokter', 'kategori_kelas', 'kategori_penjamin', 'kategori_poli'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SuketKematian $suket_kematian)
    {
        $suket_kematian->update($request->all());
        return redirect()->route('suket_kematian.index')->with('success', 'Data Berhasil Di Update');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $suket_kematian = SuketKematian::findorfail($id);
        $suket_kematian->delete();
        return redirect()->route('suket_kematian.index')->with('success', 'Data Berhasil Di Delete');

    }
}
