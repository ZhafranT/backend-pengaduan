<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pengaduan Masuk</title>
</head>
<body>
    <h2>PENGADUAN MASUK PER-TANGGAL XX</h2>
    <table>
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
        </tr>
        </thead>
        <tbody>
            @foreach ($dtUnr as $item)
            <tr>
                <td>{{ $item->pengaduan->nama }}</td>
                <td>{{ $item->pengaduan->jenisProduk }}</td>
                <td>{{ $item->pengaduan->detailProduk }}</td>
                <td>{{ $item->pengaduan->merkDagang }}</td>
                <td>{{ $item->pengaduan->type }}</td>
                <td>{{ $item->pengaduan->jenisPengaduan }}</td>
                <td>{{ $item->pengaduan->created_at }}</td>
                <td>{{ $item->statusPengaduan }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>