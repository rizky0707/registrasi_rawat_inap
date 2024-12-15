@extends('layouts.app')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/css/select2.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js"></script>
@section('content')
<h1 class="h3 mb-2 text-gray-800">Register Pasien Rawat Inap</h1>
<p>RS PINDAD</p>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    
    <div class="card-header py-3">
        <div class="row">
        <div class="col">
        <h6 class="m-0 font-weight-bold text-primary">Create Pasien Rawat Inap</h6>
        </div>
        <div class="col text-right">
        </div>
        </div>
    </div>
    <div class="card-body">
          <form method="POST" action="{{route('register_pasien.store')}}">
            @csrf
            <div class="form-group row">
              <label for="no_medrek" class="col-sm-2 col-form-label">No medrek</label>
              <div class="col-sm-6">
                <input type="text" name="no_medrek" class="form-control" id="no_medrek" placeholder="no medrek" required>
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
              <div class="col-sm-2">
                <input type="number" name="umur" class="form-control" id="umur" placeholder="umur" required>
              </div>
            </div>
            <div class="form-group row">
              <label for="tgl_masuk" class="col-sm-2 col-form-label">Tanggal Masuk</label>
              <div class="col-sm-6">
                <input type="date" name="tgl_masuk" class="form-control" id="tgl_masuk" required>
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
              <label for="r_rawat" class="col-sm-2 col-form-label">Ruangan Rawat</label>
              <div class="col-sm-6">
                <select name="r_rawat" class="form-control productcategory" required>
                  <option value="0" class="form-control">--Pilih Rawat--</option>
                  @foreach ($kategori_rawat as $item)
                  <option value="{{$item->ruang_rawat}}" class="form-control">{{$item->ruang_rawat}}</option>
                  @endforeach
              </select>
              </div>
            </div>
            <div class="form-group row">
              <label for="hak_kelas" class="col-sm-2 col-form-label">Hak Kelas / Ruangan</label>
              <div class="col-sm-3">
                <select name="hak_kelas" class="form-control productname" id="sub_category_name" required>
                  <option value="0" class="form-control">--Pilih Kelas--</option>
                  @foreach ($kategori_kelas as $item)
                  <option value="{{$item->id}}"  class="form-control" >{{$item->kelas}}</option>
                  @endforeach
              </select>
              </div>
              <div class="col-sm-3">
                <select name="hak_ruangan" id="hak_ruangan" class="form-control" required>
                  <option value="0" class="form-control">--Pilih Ruangan--</option>
              </select>
              </div>
            </div>
            <div class="form-group row">
              <label for="penjamin" class="col-sm-2 col-form-label">Penjamin</label>
              <div class="col-sm-6">
                <select name="penjamin" class="form-control theSelect" required>
                  <option value="0" class="form-control">--Pilih Penjamin--</option>
                  @foreach ($kategori_penjamin as $item) 
                  <option value="{{$item->penjamin}}" class="form-control">{{$item->penjamin}}</option>
                  @endforeach
              </select>
              </div>
            </div>
            <div class="form-group row">
              <label for="asal_poli" class="col-sm-2 col-form-label">Asal Poli</label>
              <div class="col-sm-6">
                <select name="asal_poli" class="form-control theSelect" required>
                  <option value="0" class="form-control">--Pilih Asal Poli--</option>
                  @foreach ($kategori_poli as $item) 
                  <option value="{{$item->poli}}" class="form-control">{{$item->poli}}</option>
                  @endforeach
              </select>
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
              <label for="diagnosa" class="col-sm-2 col-form-label">Diagnosa</label>
              <div class="col-sm-6">
                <textarea name="diagnosa" class="form-control" id="" cols="30" rows="10" placeholder="Diagnosa" required></textarea>
              </div>
            </div>

            <div class="form-group row">
              <label for="#" class="col-sm-2 col-form-label"></label>
              <div class="col-sm-6">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{route('register_pasien.index')}}"  class="btn btn-secondary">Batal</a>

              </div>
            </div>
          </form>
    </div>
</div>


<script>
  $(document).ready(function () {
  $('#sub_category_name').on('change', function () {
  let id = $(this).val();
  $('#hak_ruangan').empty();
  $('#hak_ruangan').append(`<option value="0" disabled selected>Processing...</option>`);
  $.ajax({
  type: 'GET',
  url: '../../GetKelasRuangan/' + id,
  success: function (response) {
  var response = JSON.parse(response);
  console.log(response);   
  $('#hak_ruangan').empty();
  $('#hak_ruangan').append(`<option value="0" disabled selected>--Pilih Ruangan Rawat--</option>`);
  response.forEach(element => {
      $('#hak_ruangan').append(`<option value="${element['id']}">${element['ruangan']}</option>`);
      });
  }
});

});
});
</script>
<script>
  $(".theSelect").select2();
</script>

@endsection
