@extends('layout.main')

@section('container')
<?php $data=[
    'dtcount_unresolve' => $dtcount_unresolve,
    'dtcount_process' => $dtcount_process,
    'dtcount_mediasi' => $dtcount_mediasi,
    'dtcount_done' => $dtcount_done
]  ?>
@include('partials.pengaduannav',$data)

<div class="pengaduan-pelanggan">

    <h2 class="mt-5 mb-3">Pengaduan Masuk</h2>

    <a href="/exportpengaduan" style="float:right" class="btn btn-success mb-3"><i class="bi bi-file-earmark-spreadsheet-fill"></i> Download Data (.xlsx)</a>
    {{-- <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-file-earmark-spreadsheet-fill"></i> Import Data (.xlsx)</a> --}}
    
    <table class="mt-5">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Jenis Produk</th>
                <th>Detail Produk</th>
                <th>Merk Dagang</th>
                <th>Type</th>
                <th>Jenis Pengaduan</th>
                <th>Tanggal</th>
                <th>Status</th>
                <th>Lihat Detail</th>
                <th></th>
            </tr>
        </thead>

        <tbody class="atable"></tbody>
            @foreach ($dtUnresolved as $item)
            <tr>
                <td>{{ $item->pengaduan->nama }}</td>
                <td>{{ $item->pengaduan->jenisProduk }}</td>
                <td>{{ $item->pengaduan->detailProduk }}</td>
                <td>{{ $item->pengaduan->merkDagang }}</td>
                <td>{{ $item->pengaduan->type }}</td>
                <td>{{ $item->pengaduan->jenisPengaduan }}</td>
                <td>{{ date('d-m-Y', strtotime($item->pengaduan->created_at)) }}</td>
                <td>{{ $item->statusPengaduan }}</td>
                <td><a href="{{ url('detailpengaduanunresolved', $item->id) }}"><span class="material-icons-sharp">find_in_page</span></a></td>
                <td>
                <form class="form-add" action="{{ url('processPengaduan',$item->id) }}" method="post">
                    {{csrf_field()}}
                    <input class="btn btn-warning" type="submit" value="Process" onclick="return confirm('Are you sure?')">
                </form>
                </td>
            </tr>
            @endforeach
            <tr>
                {{ $dtUnresolved->links('pagination::bootstrap-4') }}
            </tr>
        </tbody>
    </table>

    <!-- Modal -->
    {{-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">ImportData</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="#" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group">
                <input type="file" name="file" required>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Import</button>
        </div>
      </div>
    </div>
    </div> --}}
</div>
@include('sweetalert::alert')
@endsection