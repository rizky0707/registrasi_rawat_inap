@extends('layouts.app')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/css/select2.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js"></script>
@section('content')
<h1 class="h3 mb-2 text-gray-800">Kategori Kelas Ruangan</h1>
<p>RS PINDAD</p>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    
    <div class="card-header py-3">
        <div class="row">
        <div class="col">
        <h6 class="m-0 font-weight-bold text-primary">Create Kategori Kelas Ruangan</h6>
        </div>
        <div class="col text-right">
        </div>
        </div>
    </div>
    <div class="card-body">
          <form method="POST" action="{{route('kategori_kelasruangan.store')}}">
            @csrf
            <div class="form-group row">
              <label for="id_kelas" class="col-sm-2 col-form-label">Kelas</label>
              <div class="col-sm-6">
                <select name="id_kelas" class="form-control theSelect" required>
                  <option value="0" class="form-control">--Pilih Kelas--</option>
                  @foreach ($kategori_kelas as $item)
                  <option value="{{$item->id}}" class="form-control">{{$item->kelas}}</option>
                  @endforeach
              </select>
              </div>
            </div>
            <div class="form-group row">
              <label for="ruangan" class="col-sm-2 col-form-label">Ruangan</label>
              <div class="col-sm-6">
                <input type="text" name="ruangan" class="form-control" id="ruangan" placeholder="ruangan" required>
              </div>
            </div>
            <div class="form-group row">
              <label for="#" class="col-sm-2 col-form-label"></label>
              <div class="col-sm-6">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{route('kategori_kelasruangan.index')}}"  class="btn btn-secondary">Batal</a>

              </div>
            </div>
          </form>
    </div>
</div>
<script>
    $(".theSelect").select2();
  </script>
@endsection
