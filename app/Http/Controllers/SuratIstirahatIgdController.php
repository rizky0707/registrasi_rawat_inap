<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SuratIstirahatIgd;
use App\Models\KategoriDokter;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;

class SuratIstirahatIgdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $surat_dokter = SuratIstirahatIgd::all();
        return view('admin.surat_istirahat_igd.index', compact('surat_dokter'));

    }

    public function print_istirahat_igd()
    {
        if (request()->start_date || request()->end_date) {
            $start_date = Carbon::parse(request()->start_date)->toDateTimeString();
            $end_date = Carbon::parse(request()->end_date)->toDateTimeString();
            $surat_dokter = SuratIstirahatIgd::whereBetween('created_at',[$start_date,$end_date])->get();
        } else {
            $surat_dokter = SuratIstirahatIgd::latest()->get();
        }
        return view('admin.laporan.istirahat_dokter_igd.print', compact('surat_dokter', 'start_date', 'end_date'));

    }

    public function laporan_istirahat_igd()
    {
        if (request()->start_date || request()->end_date) {
            $start_date = Carbon::parse(request()->start_date)->toDateTimeString();
            $end_date = Carbon::parse(request()->end_date)->toDateTimeString();
            $surat_dokter = SuratIstirahatIgd::whereBetween('created_at',[$start_date,$end_date])->get();
        } else {
            $surat_dokter = SuratIstirahatIgd::latest()->get();
        }
        return view('admin.laporan.istirahat_dokter_igd.index', compact('surat_dokter'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori_dokter = KategoriDokter::all();
        return view('admin.surat_istirahat_igd.create', compact('kategori_dokter'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        SuratIstirahatIgd::create($request->all());
        return redirect()->route('surat_istirahat_igd.index')->with('success', 'Data Berhasil Di Tambahkan');

    }

    public function surat_dokter_igd($id)
    {
        $surat_dokter_igd = SuratIstirahatIgd::findorfail($id);
        return view('admin.surat_istirahat_igd.surat_dokter_igd', compact('surat_dokter_igd'));

       
    }

    public function surat_igd_pdf($id)
    {
        $pdf = SuratIstirahatIgd::findorfail($id);
        $data = compact('pdf');
        $pdf = PDF::loadView('admin.surat_istirahat_igd.surat_dokter_igdpdf', $data);
        return $pdf->download('surat_istirahat_igd.pdf');

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
        $edit = SuratIstirahatIgd::findorfail($id);
        $kategori_dokter = KategoriDokter::all();
     
        return view('admin.surat_istirahat_igd.edit', compact('edit', 'kategori_dokter'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SuratIstirahatIgd $surat_istirahat_igd)
    {
        $surat_istirahat_igd->update($request->all());
        return redirect()->route('surat_istirahat_igd.index')->with('success', 'Data Berhasil Di Update');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $surat_istirahat_igd = SuratIstirahatIgd::findorfail($id);
        $surat_istirahat_igd->delete();
        return redirect()->route('surat_istirahat_igd.index')->with('success', 'Data Berhasil Di Delete');

    }
}
