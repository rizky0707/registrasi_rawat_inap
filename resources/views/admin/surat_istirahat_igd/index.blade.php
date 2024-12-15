@extends('layouts.app')

@section('content')
<h1 class="h3 mb-2 text-gray-800">Surat Istirahat Dokter (IGD)</h1>
<p>RS PINDAD</p>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    
    <div class="card-header py-3">
        <div class="row">
        <div class="col">
        <h6 class="m-0 font-weight-bold text-primary">DataTables Surat Istirahat Dokter (IGD)</h6>
        </div>
        <div class="col text-right">
            <a href="{{route('surat_istirahat_igd.create')}}" class="btn btn-primary btn-sm">Tambah Surat Istirahat (IGD)</a>
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
                        <th>Lama Istirahat</th>            
                        <th>JK</th>            
                        <th>DPJP</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>No Medrek</th>
                        <th>Nama</th>
                        <th>Umur</th>            
                        <th>Lama Istirahat</th>            
                        <th>JK</th>            
                        <th>DPJP</th>
                        <th>Aksi</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php $no= 1; ?>
                    @foreach ($surat_dokter as $item)
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$item->no_medrek}}</td>
                        <td>{{$item->nama}}</td>
                        <td>{{$item->umur}}</td>
                        <td>{{$item->lama_istrirat_mulai}} S/D {{$item->lama_istrirat_akhir}}</td>
                        <td>{{$item->jenis_kelamin}}</td>
                        <td>{{$item->dpjp}}</td>
                        <td>
                            <form action="{{ route('surat_istirahat_igd.destroy', $item->id) }}" method="POST">
                                <a href="{{ route('surat_istirahat_igd.edit', $item->id) }}" class="btn btn-success btn-sm">Edit</a>
                                <a href="{{ route('surat_dokter_igd', $item->id) }}" class="btn btn-primary btn-sm">PDF</a>
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
