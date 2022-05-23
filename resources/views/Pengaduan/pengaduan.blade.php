@extends('layout.main')

@section('title', 'Halaman Pengaduan')

@section('container')
        <main>
            <h2>Overview</h2>
            @foreach ($dtHome as $item)
            <h3>Selamat Datang, {{ $item->name }}</h3>
            @endforeach
            <div class="date">
                <input type="date">
            </div>

            <div class="insights">
                <div class="unresolved">
                    <div class="middle">
                        <div class="center">
                            
                            <h3 class="text-muted">Unresolved</h3>
                            
                            <div class="number">
                                <h1>60</h1>
                            </div>

                        </div>
                    </div>
                </div>
                {{-- END OF UNRESOLVED --}}
                <div class="overdue">
                    <div class="middle">
                        <div class="center">

                            <h3 class="text-muted">Overdue</h3>
                            
                            <div class="number">
                                <h1>16</h1>
                            </div>

                        </div>
                    </div>
                </div>
                {{-- END OF OVERDUE --}}
            </div>
            {{-- END OF INSIGHTS --}}

            <div class="pengaduan-pelanggan">

                <h2>Pengaduan Pelanggan</h2>

                <table>
                    <thead>
                        <tr>
                            <th>Pesan</th>
                            <th>Nama Pelanggan</th>
                            <th>Kategori Produk</th>
                            <th>Tanggal</th>
                            <th>Status</th>
                        </tr>
                    </thead>

                    <tbody class="atable">
                        <tr>
                            <td><a href="#">barang bermasalah</a></td>
                            <td><a href="#">Hendra</a></td>
                            <td><a href="#">Barang</a></td>
                            <td><a href="#">3 April 2022</a></td>
                            <td class="danger">Overdue</td>
                        </tr>
                        <tr>
                            <td><a href="#">pelayanan tidak memuaskan</a></td>
                            <td><a href="#">Andini</a></td>
                            <td><a href="#">Jasa</a></td>
                            <td><a href="#">10 April 2022</a></td>
                            <td class="success">Resolved</td>
                        </tr>
                        <tr>
                            <td><a href="#">barang rusak</a></td>
                            <td><a href="#">Gani</a></td>
                            <td><a href="#">Barang</a></td>
                            <td><a href="#">16 April 2022</a></td>
                            <td class="warning">Unresolved</td>
                        </tr>
                        <tr>
                            <td><a href="#">barang pecah</a></td>
                            <td><a href="#">Sistine</a></td>
                            <td><a href="#">Barang</a></td>
                            <td><a href="#">18 April 2022</a></td>
                            <td class="warning">Unresolved</td>
                        </tr>
                        <tr>
                            <td><a href="#">jasa kurang baik</a></td>
                            <td><a href="#">Andru</a></td>
                            <td><a href="#">Jasa</a></td>
                            <td><a href="#">22 April 2022</a></td>
                            <td class="success">Resolved</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </main>
@endsection