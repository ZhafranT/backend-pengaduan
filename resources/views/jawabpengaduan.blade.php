<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Jawab Pengaduan Pelanggang</title>

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
                <a href="#">
                    <span class="material-icons-sharp">list_alt</span>
                    <h3 class="mt-2">UU PK</h3>
                </a>
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
            <div class="jawab-head">
                <h1>Jawab Pengaduan Pelanggang</h1>
            </div>

            <div class="detailpengaduan">
                <article  class="card">
                    <Section>
                        {{-- nama pelanggan --}}
                        <h2>Hendra</h2>
                        {{-- tanggal --}}
                        <p>3 April 2022</p>
                        {{-- kategori --}}
                        <p class="kategori-detail">Kategori: <span class="success">Barang</span> </p>
                        {{-- isi pengaduan --}}
                        <div class="isi-pengaduan">
                            <p class="label-isi-pengaduan">Pengaduan Pelanggan:</p>
                            <h2>Barang bermasalah</h2>
                        </div>

                    </Section>

                    {{-- FORM JAWAB --}}
                    <section class="add mt-4">
                        <form class="form-add" method="POST" action="/postCreate" enctype="multipart/form-data">
                            {{-- {{ csrf_field() }} --}}
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Gambar Pendukung</label>
                                <input type="file" name="image" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Jawab</label>
                                <textarea class="form-control" name="description"id="exampleFormControlTextarea1" rows="8"></textarea>
                            </div>
                            <div class="mb-3 d-flex justify-content-end">
                                <input class="btn btn-primary" type="submit" value="Submit">
                            </div>
                        </form>
                    </section>
                </article>

            

            </div>

        </main>
    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
</html>