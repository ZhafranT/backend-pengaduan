@extends('layout.main')

@section('container')

@include('partials.pengaduannav')

<div class="pengaduan-pelanggan">

    <h2 class="mt-5">Pengaduan Selesai</h2>

    <table class="mt-4">
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
                <th>Download Report</th>
            </tr>
        </thead>

        <tbody class="atable">
            @foreach ($dtDone as $item)
            <tr>
                <td>{{ $item->pengaduan->nama }}</td>
                <td>{{ $item->pengaduan->jenisProduk }}</td>
                <td>{{ $item->pengaduan->detailProduk }}</td>
                <td>{{ $item->pengaduan->merkDagang }}</td>
                <td>{{ $item->pengaduan->type }}</td>
                <td>{{ $item->pengaduan->jenisPengaduan }}</td>
                <td>{{ date('d-m-Y', strtotime($item->updated_at)) }}</td>
                <td>{{ $item->statusPengaduan }}</td>
                <td><a href="#"><span class="material-icons-sharp">file_download</span></a></td>
            </tr>
            @endforeach
            <tr>
                {{ $dtDone->links('pagination::bootstrap-4') }}
            </tr>
        </tbody>
    </table>
</div>
@endsection