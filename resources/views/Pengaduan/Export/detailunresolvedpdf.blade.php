<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Pengaduan</title>
    <style>
        table.static {
            position:relative;
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
    <div class="form-group">
        <h2 style="margin-bottom: 50px;">Laporan Pengaduan (Masuk)</h2>

        <table class="static" rules="all" border="1px" style="width: 100%;">
            <thead>
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

        <h4>I. IDENTITAS KONSUMEN</h4>

        <table class="static" rules="all" border="1px" style="width: 100%;">
            <thead class="table-success">
                <tr>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Tanggal Lahir</th>
                    <th>No Identitas</th>
                </tr>
            </thead>
            <tbody class="atable">

                <tr>
                    <td>{{ $dun->pengaduan->nama }}</td>
                    <td>{{ $dun->pengaduan->jenisKelamin }}</td>
                    <td>{{ date('d-m-Y', strtotime($dun->pengaduan->tanggalLahir)) }}</td>
                    <td>{{ $dun->pengaduan->noIdentitas }}</td>
                </tr>
                
            </tbody>
        </table>

        <table class="static" rules="all" border="1px" style="width: 100%;">
            <thead class="table-success">
                <tr>
                    <th>Telpon / HP</th>
                    <th>E-Mail</th>
                </tr>
            </thead>
            <tbody class="atable">
                
                <tr>
                    <td>{{ $dun->pengaduan->telepon }}</td>
                    <td>{{ $dun->pengaduan->email }}</td>
                </tr>
                
            </tbody>
        </table>

        <table class="static" rules="all" border="1px" style="width: 100%;">
            <thead class="table-success">
                <tr>
                    <th>Alamat</th>
                    <th>Provinsi</th>
                    <th>Kota / Kabupaten</th>
                    <th>Kode Pos</th>
                </tr>
            </thead>
            <tbody class="atable">
                
                <tr>
                    <td>{{ $dun->pengaduan->alamat }}</td>
                    <td>{{ $dun->pengaduan->provinsi }}</td>
                    <td>{{ $dun->pengaduan->kotaKabupaten }}</td>
                    <td>{{ $dun->pengaduan->kodePos }}</td>
                </tr>
                
            </tbody>
        </table>

        <h4>II. IDENTITAS PELAKU USAHA</h4>

        <table class="static" rules="all" border="1px" style="width: 100%;">
            <thead class="table-success">
                <tr>
                    <th>Alamat Lengkap Tempat Memperoleh Barang dan Jasa</th>
                    <th>Telpon / HP</th>
                </tr>
            </thead>
            <tbody class="atable">
                
                <tr>
                    <td>{{ $dun->pengaduan->alamatTempatBarangJasa }}</td>
                    <td>{{ $dun->pengaduan->teleponPelakuUsaha }}</td>
                </tr>
                
            </tbody>
        </table>

        <table class="static" rules="all" border="1px" style="width: 100%;">
            <thead class="table-success">
                <tr>
                    <th>Provinsi</th>
                    <th>Kota / Kabupaten</th>
                    <th>Kode Pos</th>
                </tr>
            </thead>
            <tbody class="atable">
                
                <tr>
                    <td>{{ $dun->pengaduan->provinsiPelakuUsaha }}</td>
                    <td>{{ $dun->pengaduan->kotaKabupatenPelakuUsaha }}</td>
                    <td>{{ $dun->pengaduan->kodePosPelakuUsaha }}</td>
                </tr>
                
            </tbody>
        </table>

        <h4>III. TENTANG PENGADUAN</h4>
        <h5>Barang / Jasa yang diadukan</h5>

        <table class="static" rules="all" border="1px" style="width: 100%;">
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

        <table class="static" rules="all" border="1px" style="width: 100%;">
            <thead class="table-success align-middle">
                <tr>
                    <th>Saat Kejadian Ditemukan (Tanggal / Jam)</th>
                    <th>Saat Kejadian Ditemukan (Lokasi)</th>
                </tr>
            </thead>
            <tbody class="atable">
                
                <tr>
                    <td>{{ date('d-m-Y', strtotime($dun->pengaduan->waktuKejadianDitemukan)) }}</td>
                    <td>{{ $dun->pengaduan->tempatLokasiKejadian}}</td>
                </tr>
                
            </tbody>
        </table>

        <table class="static" rules="all" border="1px" style="width: 100%;">
            <thead class="table-success align-middle">
                <tr>
                    <th>Bukti Pembelian</th>
                    <th>Saksi</th>
                </tr>
            </thead>
            <tbody class="atable">
                
                <tr>
                    <td><img src="{{ $dun->pengaduan->buktiPembelian }}" alt="-" style="width: 50%;"></td>
                    <td>{{ $dun->pengaduan->saksi}}</td>
                </tr>
                
            </tbody>
        </table>

        <table class="static" rules="all" border="1px" style="width: 100%;">
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

        <h4>IV. JENIS TUNTUTAN</h4>

        <table class="static" rules="all" border="1px" style="width: 100%;">
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

        <h4>V. KRONOLOGIS PENGADUAN</h4>

        <table class="static" rules="all" border="1px" style="width: 100%;">
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
    </div>
</body>