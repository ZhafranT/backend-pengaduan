<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../styles/styles.css"> 
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

        <div class="head-form-group" >
            <img src="https://lh3.googleusercontent.com/-CQEEaZ4IKKo/YejU-vJ7MQI/AAAAAAAAUCY/x7c9YeqlD9ordUKEamzTn6cMrLjpq1T_ACNcBGAsYHQ/w1200-h630-p-k-no-nu/Kementerian%2BPerdagangan%2BTerbaru.png" style="width: 165px; flex-direction: column; align-items: center; justify-content: center;" />
            <h2 style="margin-bottom: 50px;">Laporan Pengaduan (Proses)</h2>
        </div>


        <table class="static" rules="all" border="1px" style="width: 100%;">
            <thead>
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
                    <td>{{ $dpr->pengaduan->nama }}</td>
                    <td>{{ $dpr->pengaduan->jenisKelamin }}</td>
                    <td>{{ date('d-m-Y', strtotime($dpr->pengaduan->tanggalLahir)) }}</td>
                    <td>{{ $dpr->pengaduan->noIdentitas }}</td>
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
                    <td>{{ $dpr->pengaduan->telepon }}</td>
                    <td>{{ $dpr->pengaduan->email }}</td>
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
                    <td>{{ $dpr->pengaduan->alamat }}</td>
                    <td>{{ $dpr->pengaduan->provinsi }}</td>
                    <td>{{ $dpr->pengaduan->kotaKabupaten }}</td>
                    <td>{{ $dpr->pengaduan->kodePos }}</td>
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
                    <td>{{ $dpr->pengaduan->alamatTempatBarangJasa }}</td>
                    <td>{{ $dpr->pengaduan->teleponPelakuUsaha }}</td>
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
                    <td>{{ $dpr->pengaduan->provinsiPelakuUsaha }}</td>
                    <td>{{ $dpr->pengaduan->kotaKabupatenPelakuUsaha }}</td>
                    <td>{{ $dpr->pengaduan->kodePosPelakuUsaha }}</td>
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
                    <td>{{ $dpr->pengaduan->jenisProduk}}</td>
                    <td>{{ $dpr->pengaduan->detailProduk}}</td>
                    <td>{{ $dpr->pengaduan->merkDagang}}</td>
                    <td>{{ $dpr->pengaduan->type}}</td>
                    <td>{{ $dpr->pengaduan->jenisPengaduan}}</td>
                    
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
                    <td>{{ date('d-m-Y', strtotime($dpr->pengaduan->waktuKejadianDitemukan)) }}</td>
                    <td>{{ $dpr->pengaduan->tempatLokasiKejadian}}</td>
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

                    <td><img src="{{ $dpr->pengaduan->buktiPembelian }}" alt="-" style="width: 250px;"></td>
                    <td>{{ $dpr->pengaduan->saksi}}</td>
                    
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
                    <td>{{ $dpr->pengaduan->kerugianMaterial}}</td>
                    <td>{{ $dpr->pengaduan->kerugianFisik}}</td>
                    <td>{{ $dpr->pengaduan->kerugianPsikis}}</td>
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
                    <td>{{ $dpr->pengaduan->jenisTuntutan}}</td>
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
                    <td>{{ $dpr->pengaduan->kronologisPengaduan}}</td>
                </tr>
                
            </tbody>
        </table>
    </div>
</body>