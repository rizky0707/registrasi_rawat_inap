<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KategoriKelas;
use App\Models\KategoriKelasRuangan;

class KategoriKelasRuanganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategori_kelasruangan = KategoriKelasRuangan::latest()->get();
        return view('admin.kategori_kelasruangan.index', compact('kategori_kelasruangan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori_kelas = KategoriKelas::all();
        return view('admin.kategori_kelasruangan.create', compact('kategori_kelas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        KategoriKelasRuangan::create($request->all());
        return redirect()->route('kategori_kelasruangan.index')->with('success', 'Data Berhasil Di Tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {    
        $edit = KategoriKelasRuangan::findorfail($id);
        $kategori_kelas = KategoriKelas::all();

        return view('admin.kategori_kelasruangan.edit', compact('edit', 'kategori_kelas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KategoriKelasRuangan $kategori_kelasruangan)
    {
        $kategori_kelasruangan->update($request->all());
        return redirect()->route('kategori_kelasruangan.index')->with('success', 'Data Berhasil Di Update');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
