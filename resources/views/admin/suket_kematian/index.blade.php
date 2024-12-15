@extends('layouts.app')

@section('content')
<h1 class="h3 mb-2 text-gray-800">Surat Kematian (RANAP)</h1>
<p>RS PINDAD</p>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    
    <div class="card-header py-3">
        <div class="row">
        <div class="col">
        <h6 class="m-0 font-weight-bold text-primary">DataTables Surat Kematian (RINAP)</h6>
        </div>
        <div class="col text-right">
            <a href="{{route('suket_kematian.create')}}" class="btn btn-primary btn-sm">Tambah Surat Kematian (RINAP)</a>
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
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>No Medrek</th>
                        <th>Nama</th>
                        <th>Umur</th>
                        <th>Tgl Kematian</th>
                        <th>JK</th>
                        <th>R. Rawat</th>
                        <th>DPJP</th>
                        <th>Pukul</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>No Medrek</th>
                        <th>Nama</th>
                        <th>Umur</th>
                        <th>Tgl Kematian</th>
                        <th>JK</th>
                        <th>R. Rawat</th>
                        <th>DPJP</th>
                        <th>Pukul</th>
                        <th>Aksi</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php $no= 1; ?>
                    @foreach ($suket as $item)
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$item->no_medrek}}</td>
                        <td>{{$item->nama}}</td>
                        <td>{{$item->umur}}</td>
                        <td>{{$item->tgl_kematian}}</td>
                        <td>{{$item->jenis_kelamin}}</td>
                        <td>{{$item->ruang}}</td>
                        <td>{{$item->dpjp}}</td>
                        <td>{{$item->pukul}}</td>
                        <td>
                            <form action="{{ route('suket_kematian.destroy', $item->id) }}" method="POST">
                            <a href="{{ route('suket_pasien_template', $item->id) }}" class="btn btn-primary btn-sm">PDF</a>
                                <a href="{{ route('suket_kematian.edit', $item->id) }}" class="btn btn-success btn-sm">Edit</a>
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
