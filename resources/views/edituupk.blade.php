<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Edit UU PK</title>

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

                <a href="#">
                    <span class="material-icons-sharp">receipt_long</span>
                    <h3 class="mt-2">Pengaduan</h3>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">newspaper</span>
                    <h3 class="mt-2">Berita</h3>
                </a>
                <a href="#" class="active">
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

            <div class="input-uupk-baru">

            
                <div class="container mt-5">
                    <div class="row ">
                        <div class="col-lg d-flex justify-content-center">
                            <h1>Edit UU PK</h1>
                        </div>
                    </div>
                </div>

                <section class="add mt-2">
                    <div class="container">
                        <div class="row">
                            <div class="d-flex justify-content-center">
                                <div class="col-lg-6">
                                    <form class="form-add" method="POST" action="/postCreate" enctype="multipart/form-data">
                                        {{-- {{ csrf_field() }} --}}
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Judul</label>
                                            <input type="text" name="title" class="form-control" id="exampleFormControlInput1" placeholder="Judul">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Kategori</label>
                                            <select class="form-select" name="name" aria-label="Default select example">
                                                <option selected>Pilih Kategori</option>
                                                <option value="">Barang</option>
                                                <option value="">Jasa</option>
                                                {{-- @foreach ($categories as $c)         
                                                <option value={{$c->id}}>{{$c->name}}</option>
                                                @endforeach --}}
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Gambar</label>
                                            <input type="file" name="image" class="form-control">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleFormControlTextarea1" class="form-label">Deskripsi UU PK</label>
                                            <textarea class="form-control" name="description"id="exampleFormControlTextarea1" rows="8"></textarea>
                                        </div>
                                        <div class="mb-3 d-flex justify-content-center">
                                            <input class="btn btn-primary" type="submit" value="Submit">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </section>
            </div>

        </main>
    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
</html>