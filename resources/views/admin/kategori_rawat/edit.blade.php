@extends('layouts.app')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/css/select2.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js"></script>
@section('content')
<h1 class="h3 mb-2 text-gray-800">Edit Kategori Ruangan</h1>
<p>RS PINDAD</p>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    
    <div class="card-header py-3">
        <div class="row">
        <div class="col">
        <h6 class="m-0 font-weight-bold text-primary">Edit Kategori Ruangan</h6>
        </div>
        <div class="col text-right">
        </div>
        </div>
    </div>
    <div class="card-body">
          <form method="POST" action="{{route('kategori_rawat.update', $edit->id)}}">
            @csrf
            @method('PUT')
            <div class="form-group row">
              <label for="ruang_rawat" class="col-sm-2 col-form-label">Ruangan Rawat</label>
              <div class="col-sm-6">
                <input type="text" name="ruang_rawat" value="{{$edit->ruang_rawat}}"  class="form-control" id="nama" placeholder="nama">
              </div>
            </div>
            <div class="form-group row">
              <label for="#" class="col-sm-2 col-form-label"></label>
              <div class="col-sm-6">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{route('kategori_rawat.index')}}"  class="btn btn-secondary">Batal</a>

              </div>
            </div>
          </form>
    </div>
</div>
<script>
    $(".theSelect").select2();
  </script>
@endsection
