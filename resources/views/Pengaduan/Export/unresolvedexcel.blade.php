<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pengaduan Masuk</title>
</head>
<body>
    <h2>PENGADUAN MASUK PER-TANGGAL {{ date('d-m-Y H:i:s') }}</h2>
    <table>
        <thead>
        <tr>
            <th>ID Pengaduan</th>
            <th>ID User</th>
            <th>Tanggal Dibuat</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Tanggal Lahir</th>
            <th>No Identitas</th>
            <th>Telpon / HP</th>
            <th>E-Mail</th>
            <th>Alamat</th>
            <th>Provinsi</th>
            <th>Kota / Kabupaten</th>
            <th>Kode Pos</th>
            <th>Alamat Lengkap Tempat Memperoleh Barang dan Jasa</th>
            <th>Telepon Pelaku Usaha</th>
            <th>Provinsi Pelaku Usaha</th>
            <th>Kota / Kabupaten Pelaku Usaha</th>
            <th>Kode Pos Pelaku Usaha</th>
            <th>Jenis Produk</th>
            <th>Detail Produk</th>
            <th>Merk Dagang</th>
            <th>Type</th>
            <th>Jenis Pengaduan</th>
            <th>Saat Kejadian Ditemukan (Tanggal / Jam)</th>
            <th>Saat Kejadian Ditemukan (Lokasi)</th>
            <th>Saksi</th>
            <th>Bentuk Kerugian Material</th>
            <th>Bentuk Kerugian Fisik</th>
            <th>Bentuk Kerugian Psikis</th>
            <th>Jenis Tuntutan</th>
            <th>Kronologis Pengaduan</th>
            <th>ID Respon</th>
            <th>Status Pengaduan</th>
            <th>Tanggal Respon Dibuat</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($dtUnr as $item)
            <tr>
                <td>{{ $item->pengaduan->id }}</td>
                <td>{{ $item->pengaduan->user_id }}</td>
                <td>{{ date('d-m-Y H:i:s', strtotime($item->pengaduan->created_at)) }}</td>
                <td>{{ $item->pengaduan->nama }}</td>
                <td>{{ $item->pengaduan->jenisKelamin }}</td>
                <td>{{ date('d-m-Y', strtotime($item->pengaduan->tanggalLahir)) }}</td>
                <td>{{ $item->pengaduan->noIdentitas }}</td>
                <td>{{ $item->pengaduan->telepon }}</td>
                <td>{{ $item->pengaduan->email }}</td>
                <td>{{ $item->pengaduan->alamat }}</td>
                <td>{{ $item->pengaduan->provinsi }}</td>
                <td>{{ $item->pengaduan->kotaKabupaten }}</td>
                <td>{{ $item->pengaduan->kodePos }}</td>
                <td>{{ $item->pengaduan->alamatTempatBarangJasa }}</td>
                <td>{{ $item->pengaduan->teleponPelakuUsaha }}</td>
                <td>{{ $item->pengaduan->provinsiPelakuUsaha }}</td>
                <td>{{ $item->pengaduan->kotaKabupatenPelakuUsaha }}</td>
                <td>{{ $item->pengaduan->kodePosPelakuUsaha }}</td>
                <td>{{ $item->pengaduan->jenisProduk}}</td>
                <td>{{ $item->pengaduan->detailProduk}}</td>
                <td>{{ $item->pengaduan->merkDagang}}</td>
                <td>{{ $item->pengaduan->type}}</td>
                <td>{{ $item->pengaduan->jenisPengaduan}}</td>
                <td>{{ date('d-m-Y', strtotime($item->pengaduan->waktuKejadianDitemukan)) }}</td>
                <td>{{ $item->pengaduan->tempatLokasiKejadian}}</td>
                <td>{{ $item->pengaduan->saksi}}</td>
                <td>{{ $item->pengaduan->kerugianMaterial}}</td>
                <td>{{ $item->pengaduan->kerugianFisik}}</td>
                <td>{{ $item->pengaduan->kerugianPsikis}}</td>
                <td>{{ $item->pengaduan->jenisTuntutan}}</td>
                <td>{{ $item->pengaduan->kronologisPengaduan}}</td>
                <td>{{ $item->id }}</td>
                <td>{{ $item->statusPengaduan }}</td>
                <td>{{ date('d-m-Y', strtotime($item->created_at)) }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>