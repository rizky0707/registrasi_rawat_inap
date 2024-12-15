@extends('layouts.app')

@section('content')

<h1 class="h3 mb-2 text-gray-800">Register Rawat Inap</h1>
<p>RS PINDAD</p>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    
    <div class="card-header py-3">
        <div class="row">
        <div class="col">
        <h6 class="m-0 font-weight-bold text-primary">DataTables Register</h6>
        </div>
        <div class="col text-right">
            <a href="{{route('register_pasien.create')}}" class="btn btn-primary btn-sm">Tambah Pasien</a>
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
              <form action="{{route('register_pasien.index')}}" method="GET">
                <div class="row justify-content-center">
                    <label for="">Mulai</label>
                  <div class="col-md-2">
                    <input type="date" class="form-control" name="start_date">
                  </div>
                  <label for="">Akhir</label>
                  <div class="col-md-2">
                    <input type="date" class="form-control" name="end_date">
                  </div>
                  <div class="col-md-2">
                    <button class="btn btn-primary" type="submit">Cari</button>
                    <a href="{{route('register_pasien.index')}}" class="btn btn-danger">Reset</a>
                </div>
                </div>
              </form>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>No Medrek</th>
                        <th>Nama</th>
                        <th>Tgl Masuk</th>
                        <th>JK</th>
                        <th>R. Rawat</th>
                        <th>Kelas</th>
                        {{-- <th>Ruangan</th> --}}
                        <th>Penjamin</th>
                        <th>DPJP</th>
                        <th>Diagnosa</th>
                        <th>Tgl Input</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                      <th>No</th>
                      <th>No Medrek</th>
                      <th>Nama</th>
                      <th>Tgl Masuk</th>
                      <th>JK</th>
                      <th>R. Rawat</th>
                      <th>Kelas</th>
                      {{-- <th>Ruangan</th> --}}
                      <th>Penjamin</th>
                      <th>DPJP</th>
                      <th>Diagnosa</th>
                      <th>Tgl Input</th>
                      <th>Aksi</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php $no= 1; ?>
                    @foreach ($register as $item)
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$item->no_medrek}}</td>
                        <td>{{$item->nama}}</td>
                        <td>{{$item->tgl_masuk}}</td>
                        <td>{{$item->jenis_kelamin}}</td>
                        <td>{{$item->r_rawat}}</td>
                        <td>{{$item->kategori_kelas->kelas}}</td>
                        {{-- <td>{{$item->kategori_ruangan->ruangan}}</td> --}}
                        <td>{{$item->penjamin}}</td>
                        <td>{{$item->dpjp}}</td>
                        <td>{{$item->diagnosa}}</td>
                        <td>{{$item->created_at}}</td>
                        <td>
                            <form action="{{ route('register_pasien.destroy', $item->id) }}" method="POST">
                                <a href="{{ route('register_pasien.edit', $item->id) }}" class="btn btn-success btn-sm">Edit</a>
                                @csrf
                                @method('DELETE')
                              <button type="submit" class="btn btn-danger btn-sm" 
                              onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button> 
                            </form>
                                                    </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection
