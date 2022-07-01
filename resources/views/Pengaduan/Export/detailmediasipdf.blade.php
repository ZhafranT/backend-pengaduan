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
        <div class="head-form-group" >
            <img src="https://www.kemendag.go.id/assets/favicon.png" style="width: 90px; flex-direction: column; align-items: center; justify-content: center;" />            
            <h2 style="margin-bottom: 50px;">Laporan Pengaduan (Mediasi)</h2>
        </div>


        <table class="static" rules="all" border="1px" style="width: 100%;">
            <thead>
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
                    <td>{{ $dme->pengaduan->nama }}</td>
                    <td>{{ $dme->pengaduan->jenisKelamin }}</td>
                    <td>{{ date('d-m-Y', strtotime($dme->pengaduan->tanggalLahir)) }}</td>
                    <td>{{ $dme->pengaduan->noIdentitas }}</td>
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
                    <td>{{ $dme->pengaduan->telepon }}</td>
                    <td>{{ $dme->pengaduan->email }}</td>
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
                    <td>{{ $dme->pengaduan->alamat }}</td>
                    <td>{{ $dme->pengaduan->provinsi }}</td>
                    <td>{{ $dme->pengaduan->kotaKabupaten }}</td>
                    <td>{{ $dme->pengaduan->kodePos }}</td>
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
                    <td>{{ $dme->pengaduan->alamatTempatBarangJasa }}</td>
                    <td>{{ $dme->pengaduan->teleponPelakuUsaha }}</td>
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
                    <td>{{ $dme->pengaduan->provinsiPelakuUsaha }}</td>
                    <td>{{ $dme->pengaduan->kotaKabupatenPelakuUsaha }}</td>
                    <td>{{ $dme->pengaduan->kodePosPelakuUsaha }}</td>
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
                    <td>{{ $dme->pengaduan->jenisProduk}}</td>
                    <td>{{ $dme->pengaduan->detailProduk}}</td>
                    <td>{{ $dme->pengaduan->merkDagang}}</td>
                    <td>{{ $dme->pengaduan->type}}</td>
                    <td>{{ $dme->pengaduan->jenisPengaduan}}</td>
                    
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
                    <td>{{ date('d-m-Y', strtotime($dme->pengaduan->waktuKejadianDitemukan)) }}</td>
                    <td>{{ $dme->pengaduan->tempatLokasiKejadian}}</td>
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

                    <td><img src="{{ $dme->pengaduan->buktiPembelian }}" alt="-" style="width: 250px;"></td>
                    <td>{{ $dme->pengaduan->saksi}}</td>
                    
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
                    <td>{{ $dme->pengaduan->kerugianMaterial}}</td>
                    <td>{{ $dme->pengaduan->kerugianFisik}}</td>
                    <td>{{ $dme->pengaduan->kerugianPsikis}}</td>
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
                    <td>{{ $dme->pengaduan->jenisTuntutan}}</td>
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
                    <td>{{ $dme->pengaduan->kronologisPengaduan}}</td>
                </tr>
                
            </tbody>
        </table>
    </div>
</body>