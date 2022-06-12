@extends('layout.main')

@section('container')

@include('partials.pengaduannav')

<div class="pengaduan-pelanggan">

    <h2 class="mt-5">Pengaduan Selesai</h2>
    <a href="/exportpengaduandone" style="float:right" class="btn btn-success mb-3"><i class="bi bi-file-earmark-spreadsheet-fill"></i> Download data rekap keluar (.xlsx)</a>
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
            </tr>
        </thead>
        <tbody>
            @foreach ($dtDone as $item)
            <tr>
                <td>{{ $item->pengaduan->nama }}</td>
                <td>{{ $item->pengaduan->jenisProduk }}</td>
                <td>{{ $item->pengaduan->detailProduk }}</td>
                <td>{{ $item->pengaduan->merkDagang }}</td>
                <td>{{ $item->pengaduan->type }}</td>
                <td>{{ $item->pengaduan->jenisPengaduan }}</td>
                <td>{{ $item->updated_at }}</td>
                <td>{{ $item->statusPengaduan }}</td>
                <td><a href="{{ url('detailpengaduandone', $item->id) }}"><span class="material-icons-sharp">find_in_page</span></a></td>
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
</div>
@endsection