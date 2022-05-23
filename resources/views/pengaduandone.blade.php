<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Pengaduan - Done - Layanan Kementrian Perdagangan</title>

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
                    <a href="#">
                        <img src="../asset/logo-kemendag.png">
                    </a>
                </div>
                <div class="close" id="close-btn">
                    <span class="material-icons-sharp">close</span>
                </div>
            </div>

            <div class="sidebar">
                <a href="#" class="profile-bar">
                    <img class="profile-pict" src="../asset/profil-pict3.png">
                    <h3 class="mt-2">Dhika</h3>
                </a>

                <a href="#" class="active">
                    <span class="material-icons-sharp">receipt_long</span>
                    <h3 class="mt-2">Pengaduan</h3>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">newspaper</span>
                    <h3 class="mt-2">Berita</h3>
                </a>
                {{-- <a href="#">
                    <span class="material-icons-sharp">list_alt</span>
                    <h3 class="mt-2">UU PK</h3>
                </a> --}}
                <a href="#">
                    <span class="material-icons-sharp">bar_chart</span>
                    <h3 class="mt-2">Statistik</h3>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">logout</span>
                    <h3 class="mt-2">Logout</h3>
                </a>
            </div>
        </aside>
        {{-- END OF SIDEBAR --}}
        <main>
            <h2>Overview</h2>

            {{-- <div class="date">
                <input type="date">
            </div> --}}

            <div class="insights">
                <div class="pengaduan-unresolved">
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
                <div class="pengaduan-process">
                    <div class="middle">
                        <div class="center">

                            <h3 class="text-muted">Process</h3>
                            
                            <div class="number">
                                <h1>16</h1>
                            </div>

                        </div>
                    </div>
                </div>
                {{-- END OF PROCESS --}}
                <div class="pengaduan-mediasi">
                    <div class="middle">
                        <div class="center">
                            
                            <h3 class="text-muted">Mediasi</h3>
                            
                            <div class="number">
                                <h1>16</h1>
                            </div>

                        </div>
                    </div>
                </div>
                {{-- END OF MEDIASI --}}
                <div class="pengaduan-done pengaduan-active">
                    <div class="middle">
                        <div class="center">

                            <h3 class="text-muted">Done</h3>
                            
                            <div class="number">
                                <h1>16</h1>
                            </div>

                        </div>
                    </div>
                </div>
                {{-- END OF DONE --}}
                
            </div>
            {{-- END OF INSIGHTS --}}

            <div class="pengaduan-pelanggan">

                <h2>Pengaduan Pelanggan</h2>

                <table>
                    <thead>
                        <tr>
                            <th>Nama Pelanggan</th>
                            <th>Nama Perusahaan</th>
                            <th>Kategori Produk</th>
                            <th>Tanggal</th>
                            <th>Status</th>
                            <th>Download Report</th>
                        </tr>
                    </thead>

                    <tbody class="atable">
                        <tr>
                            <td>Hendra</td>
                            <td>PT. LOREM IPSUM</td>
                            <td>Barang</td>
                            <td>3 April 2022</td>
                            <td>Mediasi</td>
                            <td><a href="#"><span class="material-icons-sharp">file_download</span></a></td>
                        </tr>
                        <tr>
                            <td>Hendra</td>
                            <td>PT. LOREM IPSUM</td>
                            <td>Barang</td>
                            <td>3 April 2022</td>
                            <td>Mediasi</td>
                            <td><a href="#"><span class="material-icons-sharp">file_download</span></a></td>
                        </tr>
                        <tr>
                            <td>Hendra</td>
                            <td>PT. LOREM IPSUM</td>
                            <td>Barang</td>
                            <td>3 April 2022</td>
                            <td>Mediasi</td>
                            <td><a href="#"><span class="material-icons-sharp">file_download</span></a></td>
                        </tr>
                        <tr>
                            <td>Hendra</td>
                            <td>PT. LOREM IPSUM</td>
                            <td>Barang</td>
                            <td>3 April 2022</td>
                            <td>Mediasi</td>
                            <td><a href="#"><span class="material-icons-sharp">file_download</span></a></td>
                        </tr>
                        <tr>
                            <td>Hendra</td>
                            <td>PT. LOREM IPSUM</td>
                            <td>Barang</td>
                            <td>3 April 2022</td>
                            <td>Mediasi</td>
                            <td><a href="#"><span class="material-icons-sharp">file_download</span></a></td>
                        </tr>
                        <tr>
                            <div aria-label="Page navigation example">
                                <ul class="pagination justify-content-end">
                                  <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                                  </li>
                                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                                  <li class="page-item">
                                    <a class="page-link" href="#">Next</a>
                                  </li>
                                </ul>
                            </div>
                        </tr>
                    </tbody>

                </table>
                
            </div>
        </main>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
</html>