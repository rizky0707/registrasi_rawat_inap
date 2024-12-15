<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KategoriRuangRawat;

class KategoriRuangRawatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategori_rawat = KategoriRuangRawat::latest()->get();
       return view('admin.kategori_rawat.index', compact('kategori_rawat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.kategori_rawat.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        KategoriRuangRawat::create($request->all());
        return redirect()->route('kategori_rawat.index')->with('success', 'Data Berhasil Di Tambahkan');

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
        $edit = KategoriRuangRawat::findorfail($id);
        return view('admin.kategori_rawat.edit', compact('edit'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KategoriRuangRawat $kategori_rawat)
    {
        // dd($kategori_ruang_rawat);
        $kategori_rawat->update($request->all());
        return redirect()->route('kategori_rawat.index')->with('success', 'Data Berhasil Di Update');

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
