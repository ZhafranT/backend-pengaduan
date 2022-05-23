<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    {{-- MATERIAL CDN --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp">
    <link rel="stylesheet" href="../styles/styles.css"> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
</head>
<body>
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
                
                {{-- <a class="profile-bar">
                    <img class="profile-pict" src="../asset/profil-pict3.png">
                    <h3>Nama Admin</h3>
                </a> --}}

                <a href="/pengaduan" class="active">
                    <span class="material-icons-sharp">receipt_long</span>
                    <h3>Pengaduan</h3>
                </a>
                <a href="/cobaberita">
                    <span class="material-icons-sharp">newspaper</span>
                    <h3>Berita</h3>
                </a>
                <a href="/uupk">
                    <span class="material-icons-sharp">newspaper</span>
                    <h3>UU PK</h3>
                </a>
                <a href="/statistic">
                    <span class="material-icons-sharp">bar_chart</span>
                    <h3>Statistik</h3>
                </a>
                <a href="/logout">
                    <span class="material-icons-sharp">logout</span>
                    <h3>Logout</h3>
                </a>
            </div>
        </aside>
        @yield('container')
    </div>
</body>