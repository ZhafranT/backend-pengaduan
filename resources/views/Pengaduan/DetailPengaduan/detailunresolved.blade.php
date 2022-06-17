@extends('layout.main')

@section('container')

<h2 class="mt-5">Detail Pengaduan (Masuk)</h2>

<a href="{{ url('unresolvedexportpdf', $dun->id) }}" style="float:right" class="btn btn-danger mb-3"><i class="bi bi-file-earmark-spreadsheet-fill"></i> Download Data (.PDF)</a>

<table class="table table-bordered mt-5">
    <thead class="table-success">
        <tr>
            <th>ID Pengaduan</th>
            <th>ID User</th>
            <th>Status Pengaduan</th>
            <th>Tanggal Dibuat</th>
        </tr>
    </thead>
    <tbody class="atable">
        
        <tr>
            <td>{{ $dun->pengaduan->id }}</td>
            <td>{{ $dun->pengaduan->user_id }}</td>
            <td>{{ $dun->statusPengaduan }}</td>
            <td>{{ date('d-m-Y H:i:s', strtotime($dun->created_at)) }}</td>
        </tr>
        
    </tbody>
</table>

<h3 class="mt-5 mb-3">I. IDENTITAS KONSUMEN</h3>

<table class="table table-bordered">
    <thead class="table-success">
        <tr>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Tanggal Lahir</th>
            <th>No Identitas (KTP/SIM/Paspor)</th>
            <th>Telpon / HP</th>
            <th>E-Mail</th>
            <th>Alamat</th>
            <th>Provinsi</th>
            <th>Kota / Kabupaten</th>
            <th>Kode Pos</th>
        </tr>
    </thead>
    <tbody class="atable">
        
        <tr>
            <td>{{ $dun->pengaduan->nama }}</td>
            <td>{{ $dun->pengaduan->jenisKelamin }}</td>
            <td>{{ date('d-m-Y', strtotime($dun->pengaduan->tanggalLahir)) }}</td>
            <td>{{ $dun->pengaduan->noIdentitas }}</td>
            <td>{{ $dun->pengaduan->telepon }}</td>
            <td>{{ $dun->pengaduan->email }}</td>
            <td>{{ $dun->pengaduan->alamat }}</td>
            <td>{{ $dun->pengaduan->provinsi }}</td>
            <td>{{ $dun->pengaduan->kotaKabupaten }}</td>
            <td>{{ $dun->pengaduan->kodePos }}</td>
        </tr>
        
    </tbody>
</table>

<h3 class="mt-5 mb-3">II. IDENTITAS PELAKU USAHA</h3>

<table class="table table-bordered">
    <thead class="table-success">
        <tr>
            <th>Alamat Lengkap Tempat Memperoleh Barang dan Jasa</th>
            <th>Telpon / HP</th>
            <th>Provinsi</th>
            <th>Kota / Kabupaten</th>
            <th>Kode Pos</th>
        </tr>
    </thead>
    <tbody class="atable">
        
        <tr>
            <td>{{ $dun->pengaduan->alamatTempatBarangJasa }}</td>
            <td>{{ $dun->pengaduan->teleponPelakuUsaha }}</td>
            <td>{{ $dun->pengaduan->provinsiPelakuUsaha }}</td>
            <td>{{ $dun->pengaduan->kotaKabupatenPelakuUsaha }}</td>
            <td>{{ $dun->pengaduan->kodePosPelakuUsaha }}</td>
        </tr>
        
    </tbody>
</table>

<h3 class="mt-5 mb-3">III. TENTANG PENGADUAN</h3>
<h4>Barang / Jasa yang diadukan</h4>

<table class="table table-bordered">
    <thead class="table-success align-middle">
        <tr>
            <th>Jenis Produk</th>
            <th>Detail Produk</th>
            <th>Merk Dagang</th>
            <th>Type</th>
            <th>Jenis Pengaduan</th>
        </tr>
    </thead>
    <tbody class="atable">
        
        <tr>
            <td>{{ $dun->pengaduan->jenisProduk}}</td>
            <td>{{ $dun->pengaduan->detailProduk}}</td>
            <td>{{ $dun->pengaduan->merkDagang}}</td>
            <td>{{ $dun->pengaduan->type}}</td>
            <td>{{ $dun->pengaduan->jenisPengaduan}}</td>
            
        </tr>
        
    </tbody>
</table>

<table class="table table-bordered mt-5">
    <thead class="table-success align-middle">
        <tr>
            <th>Saat Kejadian Ditemukan (Tanggal / Jam)</th>
            <th>Saat Kejadian Ditemukan (Lokasi)</th>
        </tr>
    </thead>
    <tbody class="atable">
        
        <tr>
            <td>{{ $dun->pengaduan->waktuKejadianDitemukan}}</td>
            <td>{{ $dun->pengaduan->tempatLokasiKejadian}}</td>
        </tr>
        
    </tbody>
</table>

<table class="table table-bordered mt-5">
    <thead class="table-success align-middle">
        <tr>
            <th>Bukti Pembelian</th>
            <th>Saksi</th>
        </tr>
    </thead>
    <tbody class="atable">
        
        <tr>
            <td><img src="{{URL::asset($dun->pengaduan->buktiPembelian)}}" alt="-" style="width: 50%;"></td>
            {{-- <td><img src="{{ $dpr->pengaduan->buktiPembelian }}" alt=""></td> --}}
            <td>{{ $dun->pengaduan->saksi}}</td>
        </tr>
        
    </tbody>
</table>

<table class="table table-bordered mt-5">
    <thead class="table-success align-middle">
        <tr>
            <tr>
                <th colspan="3" class="text-center">Bentuk Kerugian</th>
            </tr>
            <th>Material</th>
            <th>Fisik</th>
            <th>Psikis</th>
        </tr>
    </thead>
    <tbody class="atable">
        
        <tr>
            <tr></tr>
            <td>{{ $dun->pengaduan->kerugianMaterial}}</td>
            <td>{{ $dun->pengaduan->kerugianFisik}}</td>
            <td>{{ $dun->pengaduan->kerugianPsikis}}</td>
        </tr>
        
    </tbody>
</table>

<h3 class="mt-5 mb-3">IV. JENIS TUNTUTAN</h3>

<table class="table table-bordered">
    <thead class="table-success">
        <tr>
            <th>Jenis Tuntutan</th>
        </tr>
    </thead>
    <tbody class="atable">
        
        <tr>
            <td>{{ $dun->pengaduan->jenisTuntutan}}</td>
        </tr>
        
    </tbody>
</table>

<h3 class="mt-5 mb-3">V. KRONOLOGIS PENGADUAN</h3>

<table class="table table-bordered">
    <thead class="table-success">
        <tr>
            <th>Kronologis Pengaduan</th>
        </tr>
    </thead>
    <tbody class="atable">
        
        <tr>
            <td>{{ $dun->pengaduan->kronologisPengaduan}}</td>
        </tr>
        
    </tbody>
</table>

@endsection