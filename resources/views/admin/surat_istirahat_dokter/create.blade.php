@extends('layouts.app')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/css/select2.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js"></script>
@section('content')
<h1 class="h3 mb-2 text-gray-800">Surat Istirahat Pasien (RINAP)</h1>
<p>RS PINDAD</p>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    
    <div class="card-header py-3">
        <div class="row">
        <div class="col">
        <h6 class="m-0 font-weight-bold text-primary">Create Istirahat Pasien (RINAP)</h6>
        </div>
        <div class="col text-right">
        </div>
        </div>
    </div>
    <div class="card-body">
          <form method="POST" action="{{route('surat_istirahat_dokter.store')}}">
            @csrf
            <div class="form-group row">
              <label for="no_medrek" class="col-sm-2 col-form-label">No medrek</label>
              <div class="col-sm-6">
                <input type="text" name="no_medrek" class="form-control" id="no_medrek" placeholder="no medrek" required>
              </div>
            </div>
            <div class="form-group row">
              <label for="no_surat" class="col-sm-2 col-form-label">No Surat</label>
              <div class="col-sm-6">
                <input type="text" name="no_surat" class="form-control" id="no_surat" placeholder="no surat" required>
              </div>
            </div>
            <div class="form-group row">
              <label for="nama" class="col-sm-2 col-form-label">Nama Pasien</label>
              <div class="col-sm-6">
                <input type="text" name="nama" class="form-control" id="nama" placeholder="nama" required>
              </div>
            </div>
            <div class="form-group row">
              <label for="umur" class="col-sm-2 col-form-label">Umur</label>
              <div class="col-sm-3">
                <input type="number" name="umur" class="form-control" id="umur" placeholder="umur" required>
              </div>
              <div class="col-sm-3">
                <input type="text" name="golongan" class="form-control" id="golongan" placeholder="golongan" required>
              </div>
            </div>
            <div class="form-group row">
              <label for="jabatan" class="col-sm-2 col-form-label">Jabatan</label>
              <div class="col-sm-3">
                <input type="text" name="jabatan" class="form-control" id="jabatan" placeholder="jabatan" required>
              </div>
              <div class="col-sm-3">
                <input type="number" name="unit" class="form-control" id="unit" placeholder="unit" required>
              </div>
            </div>
            <div class="form-group row">
              <label for="lama_istrirat_mulai" class="col-sm-2 col-form-label">Lama Istirahat</label>
              <div class="col-sm-3">
                <input type="text" name="lama_istirahat_mulai" placeholder="mulai" class="form-control" id="lama_istrirat_mulai" required>
              </div>
              <div class="col-sm-3">
                <input type="date" name="lama_istirahat_akhir" class="form-control" id="lama_istrirat_akhir" required>
              </div>
            </div>
            <div class="form-group row">
              <label for="jenis_kelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
              <div class="col-sm-6">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="jenis_kelamin" id="inlineRadio1" value="L" >
                  <label class="form-check-label" for="inlineRadio1">Laki - Laki</label>
                </div>      
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="jenis_kelamin" id="inlineRadio2" value="P" >
                  <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                </div>
              </div>
            </div>
            <div class="form-group row">
              <label for="dpjp" class="col-sm-2 col-form-label">DPJP</label>
             
              <div class="col-sm-6">
                <select name="dpjp" class="form-control theSelect" required>
                  <option value="0" class="form-control">--Pilih Dokter--</option>
                  @foreach ($kategori_dokter as $item) 
                  <option value="{{$item->nama}}" class="form-control">{{$item->nama}}</option>
                  @endforeach

              </select>
              </div>
            </div>

            <div class="form-group row">
              <label for="#" class="col-sm-2 col-form-label"></label>
              <div class="col-sm-6">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{route('surat_istirahat_dokter.index')}}"  class="btn btn-secondary">Batal</a>

              </div>
            </div>
          </form>
    </div>
</div>
<script>
    $(".theSelect").select2();
  </script>
@endsection
