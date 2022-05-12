<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pengaduan - Layanan Kementrian Perdagangan</title>

    {{-- MATERIAL CDN --}}
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp">
    <link rel="stylesheet" href="../styles/styles.css"> 
</head>
<body>
{{-- SIDEBAR --}}
    <div class="containers">
        <aside>
            <div class="top">
                <div class="logo">
                    <a href="/pengaduan">
                        <img src="../asset/logo-kemendag.png">
                    </a>
                </div>
                <div class="close" id="close-btn">
                    <span class="material-icons-sharp">close</span>
                </div>
            </div>

            <div class="sidebar">
                <a class="profile-bar">
                    <img class="profile-pict" src="../asset/profil-pict3.png">
                    <h3>Dhika</h3>
                </a>

                <a href="/pengaduan">
                    <span class="material-icons-sharp">receipt_long</span>
                    <h3>Pengaduan</h3>
                </a>
                <a href="/berita" class="active">
                    <span class="material-icons-sharp">newspaper</span>
                    <h3>Berita</h3>
                </a>
                <a href="/uupk">
                    <span class="material-icons-sharp">list_alt</span>
                    <h3>UU PK</h3>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">bar_chart</span>
                    <h3>Statistik</h3>
                </a>
                <a href="/loginadmin">
                    <span class="material-icons-sharp">logout</span>
                    <h3>Logout</h3>
                </a>
            </div>
        </aside>
        {{-- END OF SIDEBAR --}}
        <main>
            <h2>Overview</h2>

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
    </div>
</body>
</html>