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
        <h2 style="margin-bottom: 50px;">Laporan Pengaduan (Selesai)</h2>

        <table class="static" rules="all" border="1px" style="width: 100%;">
            <thead>
                <tr>
                    <th>ID Pengaduan</th>
                    <th>ID User</th>
                    <th>Status Pengaduan</th>
                    <th>Tanggal Mediasi</th>
                    <th>Tempat Mediasi</th>
                </tr>
            </thead>
            <tbody class="atable">
                
                <tr>
                    <td>{{ $ddo->pengaduan->id }}</td>
                    <td>{{ $ddo->pengaduan->user_id }}</td>
                    <td>{{ $ddo->statusPengaduan }}</td>
                    <td>{{ date('d-m-Y', strtotime($ddo->tanggalMediasi)) }}</td>
                    <td>{{ $ddo->tempatMediasi }}</td>
                </tr>
                
            </tbody>
        </table>

        <table class="static" rules="all" border="1px" style="width: 100%;">
            <thead class="table-success">
                <tr>
                    <th>Id Admin Pereport</th>
                    <th>Tanggal Dibuat Report</th>
                    <th>Report</th>
                </tr>
            </thead>
            <tbody class="atable">
                
                <tr>
                    <td>{{ $ddo->admin_id }}</td>
                    <td>{{ date('d-m-Y H:i:s', strtotime($ddo->updated_at)) }}</td>
                    <td>{{ $ddo->reportMediasi }}</td>
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
                    <td>{{ $ddo->pengaduan->nama }}</td>
                    <td>{{ $ddo->pengaduan->jenisKelamin }}</td>
                    <td>{{ date('d-m-Y', strtotime($ddo->pengaduan->tanggalLahir)) }}</td>
                    <td>{{ $ddo->pengaduan->noIdentitas }}</td>
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
                    <td>{{ $ddo->pengaduan->telepon }}</td>
                    <td>{{ $ddo->pengaduan->email }}</td>
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
                    <td>{{ $ddo->pengaduan->alamat }}</td>
                    <td>{{ $ddo->pengaduan->provinsi }}</td>
                    <td>{{ $ddo->pengaduan->kotaKabupaten }}</td>
                    <td>{{ $ddo->pengaduan->kodePos }}</td>
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
                    <td>{{ $ddo->pengaduan->alamatTempatBarangJasa }}</td>
                    <td>{{ $ddo->pengaduan->teleponPelakuUsaha }}</td>
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
                    <td>{{ $ddo->pengaduan->provinsiPelakuUsaha }}</td>
                    <td>{{ $ddo->pengaduan->kotaKabupatenPelakuUsaha }}</td>
                    <td>{{ $ddo->pengaduan->kodePosPelakuUsaha }}</td>
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
                    <td>{{ $ddo->pengaduan->jenisProduk}}</td>
                    <td>{{ $ddo->pengaduan->detailProduk}}</td>
                    <td>{{ $ddo->pengaduan->merkDagang}}</td>
                    <td>{{ $ddo->pengaduan->type}}</td>
                    <td>{{ $ddo->pengaduan->jenisPengaduan}}</td>
                    
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
                    <td>{{ date('d-m-Y', strtotime($ddo->pengaduan->waktuKejadianDitemukan)) }}</td>
                    <td>{{ $ddo->pengaduan->tempatLokasiKejadian}}</td>
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

                    <td><img src="{{ $ddo->pengaduan->buktiPembelian }}" alt="-" style="width: 50%;"></td>
                    <td>{{ $ddo->pengaduan->saksi}}</td>
                    
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
                    <td>{{ $ddo->pengaduan->kerugianMaterial}}</td>
                    <td>{{ $ddo->pengaduan->kerugianFisik}}</td>
                    <td>{{ $ddo->pengaduan->kerugianPsikis}}</td>
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
                    <td>{{ $ddo->pengaduan->jenisTuntutan}}</td>
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
                    <td>{{ $ddo->pengaduan->kronologisPengaduan}}</td>
                </tr>
                
            </tbody>
        </table>
    </div>
</body>