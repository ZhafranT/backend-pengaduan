@extends('layout.main')

@section('container')

<h2 class="mt-5">Detail Pengaduan (Mediasi)</h2>

<a href="{{ url('mediasiexportpdf', $dme->id) }}" style="float:right" class="btn btn-danger mb-3"><i class="bi bi-file-earmark-spreadsheet-fill"></i> Download Data (.PDF)</a>

<table class="table table-bordered mt-5">
    <thead class="table-success">
        <tr>
            <th>ID Pengaduan</th>
            <th>ID User</th>
            <th>Status Pengaduan</th>
            <th>Tanggal Dibuat Mediasi</th>
            <th>Id Admin Pemediasi</th>
            <th>Tanggal Mediasi</th>
            <th>Tempat Mediasi</th>
        </tr>
    </thead>
    <tbody class="atable">
        
        <tr>
            <td>{{ $dme->pengaduan->id }}</td>
            <td>{{ $dme->pengaduan->user_id }}</td>
            <td>{{ $dme->statusPengaduan }}</td>
            <td>{{ date('d-m-Y', strtotime($dme->updated_at)) }}</td>
            <td>{{ $dme->admin_id }}</td>
            <td>{{ date('d-m-Y', strtotime($dme->tanggalMediasi)) }}</td>
            <td>{{ $dme->tempatMediasi }}</td>
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
            <td>{{ $dme->pengaduan->nama }}</td>
            <td>{{ $dme->pengaduan->jenisKelamin }}</td>
            <td>{{ date('d-m-Y', strtotime($dme->pengaduan->tanggalLahir)) }}</td>
            <td>{{ $dme->pengaduan->noIdentitas }}</td>
            <td>{{ $dme->pengaduan->telepon }}</td>
            <td>{{ $dme->pengaduan->email }}</td>
            <td>{{ $dme->pengaduan->alamat }}</td>
            <td>{{ $dme->pengaduan->provinsi }}</td>
            <td>{{ $dme->pengaduan->kotaKabupaten }}</td>
            <td>{{ $dme->pengaduan->kodePos }}</td>
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
            <td>{{ $dme->pengaduan->alamatTempatBarangJasa }}</td>
            <td>{{ $dme->pengaduan->teleponPelakuUsaha }}</td>
            <td>{{ $dme->pengaduan->provinsiPelakuUsaha }}</td>
            <td>{{ $dme->pengaduan->kotaKabupatenPelakuUsaha }}</td>
            <td>{{ $dme->pengaduan->kodePosPelakuUsaha }}</td>
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
            <td>{{ $dme->pengaduan->jenisProduk}}</td>
            <td>{{ $dme->pengaduan->detailProduk}}</td>
            <td>{{ $dme->pengaduan->merkDagang}}</td>
            <td>{{ $dme->pengaduan->type}}</td>
            <td>{{ $dme->pengaduan->jenisPengaduan}}</td>
            
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
            <td>{{ date('d-m-Y', strtotime($dme->pengaduan->waktuKejadianDitemukan)) }}</td>
            <td>{{ $dme->pengaduan->tempatLokasiKejadian}}</td>
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
            {{-- <td><img src="{{URL::asset($dme->pengaduan->buktiPembelian)}}" alt="-" style="width: 50%;"></td> --}}
            {{-- <td><img src="{{ asset('storage/' . $dme->pengaduan->buktiPembelian) }}" alt="-" style="width: 50%;"></td> --}}
            <td><img src="{{ $dme->pengaduan->buktiPembelian }}" alt="-" style="width: 50%;"></td>
            <td>{{ $dme->pengaduan->saksi}}</td>
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
            <td>{{ $dme->pengaduan->kerugianMaterial}}</td>
            <td>{{ $dme->pengaduan->kerugianFisik}}</td>
            <td>{{ $dme->pengaduan->kerugianPsikis}}</td>
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
            <td>{{ $dme->pengaduan->jenisTuntutan}}</td>
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
            <td>{{ $dme->pengaduan->kronologisPengaduan}}</td>
        </tr>
        
    </tbody>
</table>

@endsection