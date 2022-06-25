@extends('layout.main')

@section('container')

<h2 class="mt-5">Detail Pengaduan (Proses)</h2>

<a href="{{ url('processexportpdf', $dpr->id) }}" style="float:right" class="btn btn-danger mb-3"><i class="bi bi-file-earmark-spreadsheet-fill"></i> Download Data (.PDF)</a>

<table class="table table-bordered mt-5">
    <thead class="table-success">
        <tr>
            <th>ID Pengaduan</th>
            <th>ID User</th>
            <th>Status Pengaduan</th>
            <th>ID Admin Pemroses</th>
            <th>Tanggal Diproses</th>
        </tr>
    </thead>
    <tbody class="atable">
        
        <tr>
            <td>{{ $dpr->pengaduan->id }}</td>
            <td>{{ $dpr->pengaduan->user_id }}</td>
            <td>{{ $dpr->statusPengaduan }}</td>
            <td>{{ $dpr->admin_id }}</td>
            <td>{{ date('d-m-Y H:i:s', strtotime($dpr->updated_at)) }}</td>
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
            <td>{{ $dpr->pengaduan->nama }}</td>
            <td>{{ $dpr->pengaduan->jenisKelamin }}</td>
            <td>{{ date('d-m-Y', strtotime($dpr->pengaduan->tanggalLahir)) }}</td>
            <td>{{ $dpr->pengaduan->noIdentitas }}</td>
            <td>{{ $dpr->pengaduan->telepon }}</td>
            <td>{{ $dpr->pengaduan->email }}</td>
            <td>{{ $dpr->pengaduan->alamat }}</td>
            <td>{{ $dpr->pengaduan->provinsi }}</td>
            <td>{{ $dpr->pengaduan->kotaKabupaten }}</td>
            <td>{{ $dpr->pengaduan->kodePos }}</td>
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
            <td>{{ $dpr->pengaduan->alamatTempatBarangJasa }}</td>
            <td>{{ $dpr->pengaduan->teleponPelakuUsaha }}</td>
            <td>{{ $dpr->pengaduan->provinsiPelakuUsaha }}</td>
            <td>{{ $dpr->pengaduan->kotaKabupatenPelakuUsaha }}</td>
            <td>{{ $dpr->pengaduan->kodePosPelakuUsaha }}</td>
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
            <td>{{ $dpr->pengaduan->jenisProduk}}</td>
            <td>{{ $dpr->pengaduan->detailProduk}}</td>
            <td>{{ $dpr->pengaduan->merkDagang}}</td>
            <td>{{ $dpr->pengaduan->type}}</td>
            <td>{{ $dpr->pengaduan->jenisPengaduan}}</td>
            
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
            <td>{{ date('d-m-Y', strtotime($dpr->pengaduan->waktuKejadianDitemukan)) }}</td>
            <td>{{ $dpr->pengaduan->tempatLokasiKejadian}}</td>
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
            {{-- <td><img src="{{URL::asset($dpr->pengaduan->buktiPembelian)}}" alt="-" style="width: 50%;"></td> --}}
            {{-- <td><img src="{{ asset('storage/' . $dpr->pengaduan->buktiPembelian) }}" alt="-" style="width: 50%;"></td> --}}
            <td><img src="{{ $dpr->pengaduan->buktiPembelian }}" alt="-" style="width: 50%;"></td>
            <td>{{ $dpr->pengaduan->saksi}}</td>
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
            <td>{{ $dpr->pengaduan->kerugianMaterial}}</td>
            <td>{{ $dpr->pengaduan->kerugianFisik}}</td>
            <td>{{ $dpr->pengaduan->kerugianPsikis}}</td>
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
            <td>{{ $dpr->pengaduan->jenisTuntutan}}</td>
        </tr>
        
    </tbody>
</table>

<h3 class="mt-5 mb-3">V. KRONOLOGIS PENGADUAN</h4>

<table class="table table-bordered">
    <thead class="table-success">
        <tr>
            <th>Kronologis Pengaduan</th>
        </tr>
    </thead>
    <tbody class="atable">
        
        <tr>
            <td>{{ $dpr->pengaduan->kronologisPengaduan}}</td>
        </tr>
        
    </tbody>
</table>

@endsection