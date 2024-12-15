@extends('layouts.app')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/css/select2.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js"></script>
@section('content')
<h1 class="h3 mb-2 text-gray-800">Suket Kematian Pasien (RINAP)</h1>
<p>RS PINDAD</p>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    
    <div class="card-header py-3">
        <div class="row">
        <div class="col">
        <h6 class="m-0 font-weight-bold text-primary">Edit Suket Kematian (RINAP)</h6>
        </div>
        <div class="col text-right">
        </div>
        </div>
    </div>
    <div class="card-body">
          <form method="POST" action="{{route('suket_kematian.update', $edit->id)}}">
            @csrf
            @method('PUT')
            <div class="form-group row">
              <label for="no_medrek" class="col-sm-2 col-form-label">No medrek</label>
              <div class="col-sm-6">
                <input type="text" name="no_medrek" value="{{$edit->no_medrek}}" class="form-control" id="no_medrek" placeholder="no medrek" required>
              </div>
            </div>
            <div class="form-group row">
              <label for="no_surat" class="col-sm-2 col-form-label">No Surat</label>
              <div class="col-sm-6">
                <input type="text" name="no_surat" value="{{$edit->no_surat}}" class="form-control" id="no_surat" placeholder="no surat" required>
              </div>
            </div>
            <div class="form-group row">
              <label for="nama" class="col-sm-2 col-form-label">Nama Pasien</label>
              <div class="col-sm-3">
                <input type="text" name="nama" value="{{$edit->nama}}" class="form-control" id="nama" placeholder="nama" required>
              </div>
              <div class="col-sm-3">
                <input type="number" name="umur" value="{{$edit->umur}}" class="form-control" id="umur" placeholder="umur" required>
              </div>
            </div>
            {{-- <div class="form-group row">
              <label for="umur" class="col-sm-2 col-form-label">Umur</label>
             
            </div> --}}
            <div class="form-group row">
              <label for="alamat_tempat_tinggal" class="col-sm-2 col-form-label">Alamat Tempat Tinggal</label>
              <div class="col-sm-6">
                <textarea name="alamat_tinggal" class="form-control" id="" cols="30" rows="10" placeholder="alamat tempat tinggal" required>{{$edit->alamat_tinggal}}</textarea>
              </div>
            </div>
            <div class="form-group row">
              <label for="alamat_ktp" class="col-sm-2 col-form-label">Alamat Ktp</label>
              <div class="col-sm-3">
                <input type="text" name="alamat_ktp" value="{{$edit->alamat_ktp}}"  class="form-control" id="alamat_ktp" placeholder="alamat ktp" required>
              </div>
              <div class="col-sm-1">
                <input type="number" name="no_alamat" value="{{$edit->no_alamat}}" class="form-control" id="no_alamat" placeholder="no alamat" required>
              </div>
              <div class="col-sm-1">
                <input type="number" name="rt" value="{{$edit->rt}}" class="form-control" id="rt" placeholder="rt" required>
              </div>
              <div class="col-sm-1">
                <input type="number" name="rw" value="{{$edit->rw}}" class="form-control" id="rw" placeholder="rw" required>
              </div>
            </div>
            <div class="form-group row">
              <label for="kelurahan" class="col-sm-2 col-form-label"></label>
              <div class="col-sm-3">
                <input type="text" name="kelurahan" value="{{$edit->kelurahan}}" class="form-control" id="kelurahan" placeholder="kelurahan" required>
              </div>
              <div class="col-sm-3">
                <input type="text" name="kecamatan" value="{{$edit->kecamatan}}" class="form-control" id="kecamatan" placeholder="kecamatan" required>
              </div>
            </div>
            <div class="form-group row">
              <label for="kota_kab" class="col-sm-2 col-form-label"></label>
              <div class="col-sm-3">
                <input type="text" name="kota_kab" value="{{$edit->kota_kab}}" class="form-control" id="kota_kab" placeholder="kota/kab" required>
              </div>
              <div class="col-sm-3">
                <input type="number" name="kode_pos" value="{{$edit->kode_pos}}" class="form-control" id="kode_pos" placeholder="kode pos" required>
              </div>
            </div>
            <div class="form-group row">
              <label for="telepon_hp" class="col-sm-2 col-form-label"></label>
              <div class="col-sm-6">
                <input type="text" name="telepon_hp" value="{{$edit->telepon_hp}}" class="form-control" id="telepon_hp" placeholder="telepon / hp" required>
              </div>
            </div>
            <div class="form-group row">
              <label for="pekerjaan" class="col-sm-2 col-form-label">Pekerjaan *)</label>
              <div class="col-sm-6">
                <input type="text" name="pekerjaan" value="{{$edit->pekerjaan}}" class="form-control" id="pekerjaan" placeholder="pekerjaan" required>
              </div>
            </div>
            <div class="form-group row">
              <label for="nama_ayah_suami" class="col-sm-2 col-form-label">Nama Ayah / Suami</label>
              <div class="col-sm-6">
                <input type="text" name="nama_ayah_suami" value="{{$edit->nama_ayah_suami}}" class="form-control" id="nama_ayah_suami" placeholder="nama ayah / suami" required>
              </div>
            </div>
            <div class="form-group row">
              <label for="nama_ibu_istri" class="col-sm-2 col-form-label">Nama Ibu / Istri</label>
              <div class="col-sm-6">
                <input type="text" name="nama_ibu_istri" value="{{$edit->nama_ibu_istri}}" class="form-control" id="nama_ibu_istri" placeholder="nama ibu / istri" required>
              </div>
            </div>
            <div class="form-group row">
              <label for="hari_rawat" class="col-sm-2 col-form-label">Pada Hari / Tanggal</label>
              <div class="col-sm-2">
                <select name="hari_rawat" id="" class="form-control">
                  <option value="0" class="form-control">-- Pilih Hari --</option>
                  <option value="SENIN" {{ $edit->hari_rawat == 'SENIN' ? 'selected' : '' }}  class="form-control">SENIN</option>
                  <option value="SELASA" {{ $edit->hari_rawat == 'SELASA' ? 'selected' : '' }} class="form-control">SELASA</option>
                  <option value="RABU" {{ $edit->hari_rawat == 'RABU' ? 'selected' : '' }} class="form-control">RABU</option>
                  <option value="KAMIS" {{ $edit->hari_rawat == 'KAMIS' ? 'selected' : '' }} class="form-control">KAMIS</option>
                  <option value="JUMAT" {{ $edit->hari_rawat == 'JUMAT' ? 'selected' : '' }} class="form-control">JUMAT</option>
                  <option value="SABTU" {{ $edit->hari_rawat == 'SABTU' ? 'selected' : '' }} class="form-control">SABTU</option>
                  <option value="MINGGU" {{ $edit->hari_rawat == 'MINGGU' ? 'selected' : '' }} class="form-control">MINGGU</option>

              </select>
              </div>
              <div class="col-sm-4">
                <input type="date" name="tanggal_rawat" value="{{$edit->tanggal_rawat}}" class="form-control" id="tanggal_rawat" placeholder="tanggal_rawat" required>
              </div>
            </div>
            <div class="form-group row">
              <label for="ruang" class="col-sm-2 col-form-label">Ruang / Kelas</label>
              <div class="col-sm-2">
                <select name="ruang" class="form-control theSelect productcategory" required>
                  <option value="0" class="form-control">--Pilih Ruang--</option>
                  @foreach ($kategori_rawat as $item)
                  <option value="{{$item->ruang_rawat}}" {{ $item->ruang_rawat == $edit->ruang ? 'selected' : '' }} class="form-control">{{$item->ruang_rawat}}</option>
                  @endforeach
                </select>
              </div>
                
              <div class="col-sm-4">
                <select name="kelas" class="form-control theSelect productname" id="sub_category_name" required>
                  <option value="0" class="form-control">--Pilih Kelas--</option>
                  @foreach ($kategori_kelas as $item)
                  <option value="{{$item->id}}" {{ $item->id == $edit->kelas ? 'selected' : '' }}  class="form-control" >{{$item->kelas}}</option>
                  @endforeach
              </select>
              </div>
            </div>
            <div class="form-group row">
              <label for="hari_kematian" class="col-sm-2 col-form-label">Hari / Tanggal</label>
              <div class="col-sm-2">
                <select name="hari_kematian" id="" class="form-control">
                  <option value="0" class="form-control">-- Pilih Hari --</option>
                  <option value="SENIN" {{ $edit->hari_kematian == 'SENIN' ? 'selected' : '' }}  class="form-control">SENIN</option>
                  <option value="SELASA" {{ $edit->hari_kematian == 'SELASA' ? 'selected' : '' }} class="form-control">SELASA</option>
                  <option value="RABU" {{ $edit->hari_kematian == 'RABU' ? 'selected' : '' }} class="form-control">RABU</option>
                  <option value="KAMIS" {{ $edit->hari_kematian == 'KAMIS' ? 'selected' : '' }} class="form-control">KAMIS</option>
                  <option value="JUMAT" {{ $edit->hari_kematian == 'JUMAT' ? 'selected' : '' }} class="form-control">JUMAT</option>
                  <option value="SABTU" {{ $edit->hari_kematian == 'SABTU' ? 'selected' : '' }} class="form-control">SABTU</option>
                  <option value="MINGGU" {{ $edit->hari_kematian == 'MINGGU' ? 'selected' : '' }} class="form-control">MINGGU</option>
              </select>
              </div>
              <div class="col-sm-4">
                <input type="date" name="tgl_kematian" value="{{$edit->tgl_kematian}}" class="form-control" id="tgl_kematian" placeholder="tanggal kematian" required>
              </div>
            </div>
            <div class="form-group row">
              <label for="pukul" class="col-sm-2 col-form-label">Pukul</label>
              <div class="col-sm-2">
                <input type="time" name="pukul" value="{{$edit->pukul}}" class="form-control" id="pukul" placeholder="pukul" required>
              </div>
              <div class="col-sm-2">
                WIB.
              </div>
            </div>
            <div class="form-group row">
              <label for="jenis_kelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
              <div class="col-sm-6">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" {{ $edit->jenis_kelamin == 'L' ? 'checked' : ''}} name="jenis_kelamin" id="inlineRadio1" value="L" >
                  <label class="form-check-label" for="inlineRadio1">Laki - Laki</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" {{ $edit->jenis_kelamin == 'P' ? 'checked' : ''}} name="jenis_kelamin" id="inlineRadio2" value="P" >
                  <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                </div>
              </div>
            </div>
            <div class="form-group row">
              <label for="penjamin" class="col-sm-2 col-form-label">Penjamin</label>
              <div class="col-sm-3">
                <select name="penjamin" class="form-control theSelect" required>
                  <option value="0" class="form-control">--Pilih Penjamin--</option>
                  @foreach ($kategori_penjamin as $item) 
                  <option value="{{$item->penjamin}}" {{ $item->penjamin == $edit->penjamin ? 'selected' : '' }} class="form-control">{{$item->penjamin}}</option>
                  @endforeach
              </select>
              </div>
              <div class="col-sm-3">
                <select name="asal_poli" class="form-control theSelect" required>
                  <option value="0" class="form-control">--Pilih Asal Poli--</option>
                  @foreach ($kategori_poli as $item) 
                  <option value="{{$item->poli}}" {{ $item->poli == $edit->asal_poli ? 'selected' : '' }} class="form-control">{{$item->poli}}</option>
                  @endforeach
              </select>
              </div>
            </div>
            
            <div class="form-group row">
              <label for="dpjp" class="col-sm-2 col-form-label">DPJP</label>
              <div class="col-sm-6">
                <select name="dpjp" class="form-control theSelect" required>
                  <option value="0" class="form-control">--Pilih Asal Poli--</option>
                  @foreach ($kategori_dokter as $item)
                  <option value="{{$item->nama}}" {{ $item->nama == $edit->dpjp ? 'selected' : '' }} class="form-control">{{$item->nama}}</option>
                  @endforeach
              </select>
              </div>
            </div>
            <div class="form-group row">
              <label for="status_infeksi" class="col-sm-2 col-form-label">Status Infeksi</label>
              <div class="col-sm-6">
                <input type="checkbox"  id="vehicle1" name="status_infeksi[]" value="U07.1 Jenazah OTG/suspek/konfirmasi positif Covid-19"
                {{ str_contains($edit->status_infeksi, 'U07.1 Jenazah OTG/suspek/konfirmasi positif Covid-19')  ? 'checked' : ''  }}>
                <label for="vehicle1"> U07.1 Jenazah OTG/suspek/konfirmasi positif Covid-19 *)
                </div>
            </div>
            <div class="form-group row">
              <label for="status_infeksi" class="col-sm-2 col-form-label"></label>
              <div class="col-sm-6">
                <input type="checkbox" id="vehicle1" name="status_infeksi[]" value="U07.2 Jenazah tidak terinfeksi Covid-19"
                {{ str_contains($edit->status_infeksi, 'U07.2 Jenazah tidak terinfeksi Covid-19')  ? 'checked' : ''  }}>
                <label for="vehicle1"> U07.2 Jenazah tidak terinfeksi Covid-19 )
              </div>
            </div>

            <div class="form-group row">
              <label for="#" class="col-sm-2 col-form-label"></label>
              <div class="col-sm-6">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{route('suket_kematian.index')}}"  class="btn btn-secondary">Batal</a>

              </div>
            </div>
          </form>
    </div>
</div>
<script>
    $(".theSelect").select2();
  </script>
@endsection
