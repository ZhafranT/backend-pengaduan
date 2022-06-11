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

    <a href="/exportpengaduan" style="float:right" class="btn btn-success mb-3"><i class="bi bi-file-earmark-spreadsheet-fill"></i> Download data rekap masuk (.xlsx)</a>
    {{-- <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-file-earmark-spreadsheet-fill"></i> Import Data (.xlsx)</a> --}}
    <br><br><br>
    <table id="example" class="table table-striped table-bordered" style="width:100%">
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
        <tbody>
          @foreach ($dtUnresolved as $item)
            <tr>
                <td>{{ $item->pengaduan->nama }}</td>
                <td>{{ $item->pengaduan->jenisProduk }}</td>
                <td>{{ $item->pengaduan->detailProduk }}</td>
                <td>{{ $item->pengaduan->merkDagang }}</td>
                <td>{{ $item->pengaduan->type }}</td>
                <td>{{ $item->pengaduan->jenisPengaduan }}</td>
                <td>{{ $item->pengaduan->created_at }}</td>
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
        </tbody>
    </table>
    <br><br><br>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>

    <script>
      $(document).ready(function () {
          $('#example').DataTable();
      });
    </script>

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