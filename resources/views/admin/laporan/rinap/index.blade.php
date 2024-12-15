@extends('layouts.app')

@section('content')

<h1 class="h3 mb-2 text-gray-800">Laporan Register Rawat Inap</h1>
<p>RS PINDAD</p>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    
    <div class="card-header py-3">
        <div class="row">
        <div class="col">
        <h6 class="m-0 font-weight-bold text-primary">Laporan Register</h6>
        </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong>Berhasil !</strong> {{ $message }}.
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    @endif
    <div class="card-body">     
              <form action="{{route('print')}}" method="GET" target="_blank">
                <div class="form-group row">
                  <label for="start_date" class="col-sm-2 col-form-label">Mulai</label>
                  <div class="col-sm-6">
                    <input type="date" name="start_date" class="form-control" id="start_date" required>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="end_date" class="col-sm-2 col-form-label">Akhir</label>
                  <div class="col-sm-6">
                    <input type="date" name="end_date" class="form-control" id="end_date" required>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="dpjp" class="col-sm-2 col-form-label">DPJP</label>
                 
                  <div class="col-sm-6">
                    <select name="dpjp" class="form-control theSelect" required>
                      <option value="0" class="form-control">--Pilih Dokter--</option>
                      
                      <option value="dr Amelia Andriani, Sp.PD" class="form-control">dr Amelia Andriani, Sp.PD</option>
                      <option value="dr Lisa Nursanty, Sp.B, M.Kes" class="form-control">dr Lisa Nursanty, Sp.B, M.Kes</option>
                      <option value="dr Dicky Santosa, Sp.A" class="form-control">dr Dicky Santosa, Sp.A</option>
                      
    
                  </select>
                  </div>
                </div>
                <div class="form-group row">
              <label for="#" class="col-sm-2 col-form-label"></label>
              <div class="col-sm-6">
                <button type="submit" class="btn btn-primary">Print</button>
                <button type="reset" class="btn btn-danger">Reset</button>
              </div>
            </div>
              </form>
    </div>
</div>


@endsection
