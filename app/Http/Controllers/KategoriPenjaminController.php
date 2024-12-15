<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KategoriPenjamin;

class KategoriPenjaminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategori_penjamin = KategoriPenjamin::latest()->get();
        return view('admin.kategori_penjamin.index', compact('kategori_penjamin'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.kategori_penjamin.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        KategoriPenjamin::create($request->all());
        return redirect()->route('kategori_penjamin.index')->with('success', 'Data Berhasil Di Tambahkan');

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
        $edit = KategoriPenjamin::findorfail($id);
        return view('admin.kategori_penjamin.edit', compact('edit'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KategoriPenjamin $kategori_penjamin)
    {
        $kategori_penjamin->update($request->all());
        return redirect()->route('kategori_penjamin.index')->with('success', 'Data Berhasil Di Update');

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
