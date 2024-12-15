@extends('layouts.app')

@section('content')
<h1 class="h3 mb-2 text-gray-800">Kategori Kelas</h1>
<p>RS PINDAD</p>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    
    <div class="card-header py-3">
        <div class="row">
        <div class="col">
        <h6 class="m-0 font-weight-bold text-primary">DataTables Kategori Kelas</h6>
        </div>
        <div class="col text-right">
            <a href="{{route('kategori_kelas.create')}}" class="btn btn-primary btn-sm">Tambah Kelas</a>
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
                        <th>Kelas</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Kelas</th>
                        <th>Aksi</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php $no= 1; ?>
                    @foreach ($kategori_kelas as $item)
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$item->kelas}}</td>
                        <td>
                                <a href="{{ route('kategori_kelas.edit', $item->id) }}" class="btn btn-success btn-sm">Edit</a>
                         </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
