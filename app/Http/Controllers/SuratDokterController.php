<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SuratIstirahatDokter;
use App\Models\User;
use App\Models\KategoriDokter;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;


class SuratDokterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $surat_dokter = SuratIstirahatDokter::all();
        return view('admin.surat_istirahat_dokter.index', compact('surat_dokter'));

    }

    public function print_istirahat_ri()
    {
        if (request()->start_date || request()->end_date) {
            $start_date = Carbon::parse(request()->start_date)->toDateTimeString();
            $end_date = Carbon::parse(request()->end_date)->toDateTimeString();
            $surat_dokter = SuratIstirahatDokter::whereBetween('created_at',[$start_date,$end_date])->get();
        } else {
            $surat_dokter = SuratIstirahatDokter::latest()->get();
        }
        return view('admin.laporan.istirahat_dokter_ri.print', compact('surat_dokter', 'start_date', 'end_date'));

    }

    public function laporan_istirahat_ri()
    {
        if (request()->start_date || request()->end_date) {
            $start_date = Carbon::parse(request()->start_date)->toDateTimeString();
            $end_date = Carbon::parse(request()->end_date)->toDateTimeString();
            $surat_dokter = SuratIstirahatDokter::whereBetween('created_at',[$start_date,$end_date])->get();
        } else {
            $surat_dokter = SuratIstirahatDokter::latest()->get();
        }
        return view('admin.laporan.istirahat_dokter_ri.index', compact('surat_dokter'));

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori_dokter = KategoriDokter::all();
        return view('admin.surat_istirahat_dokter.create', compact('kategori_dokter'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        SuratIstirahatDokter::create($request->all());
        return redirect()->route('surat_istirahat_dokter.index')->with('success', 'Data Berhasil Di Tambahkan');

    }

    public function surat_dokter_template($id)
    {
        $surat_dokter_template = SuratIstirahatDokter::findorfail($id);
        return view('admin.surat_istirahat_dokter.surat_dokter_template', compact('surat_dokter_template'));

       
    }

    public function surat_dokter_pdf($id)
    {
        $pdf = SuratIstirahatDokter::findorfail($id);
        $data = compact('pdf');
        $pdf = PDF::loadView('admin.surat_istirahat_dokter.surat_dokter_pdf', $data);
        return $pdf->download('surat_istirahat_dokter.pdf');

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
        $edit = SuratIstirahatDokter::findorfail($id);
        $kategori_dokter = KategoriDokter::all();
     
        return view('admin.surat_istirahat_dokter.edit', compact('edit', 'kategori_dokter'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SuratIstirahatDokter $surat_istirahat_dokter)
    {
        $surat_istirahat_dokter->update($request->all());
        return redirect()->route('surat_istirahat_dokter.index')->with('success', 'Data Berhasil Di Update');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $surat_istirahat_dokter = SuratIstirahatDokter::findorfail($id);
        $surat_istirahat_dokter->delete();
        return redirect()->route('surat_istirahat_dokter.index')->with('success', 'Data Berhasil Di Delete');

    }
}
