<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous"> --}}
    <title>Input UU PK Baru</title>

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
                    <h3>Dhika</h3>
                </a>

                <a href="#">
                    <span class="material-icons-sharp">receipt_long</span>
                    <h3>Pengaduan</h3>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">newspaper</span>
                    <h3>Berita</h3>
                </a>
                <a href="#" class="active">
                    <span class="material-icons-sharp">list_alt</span>
                    <h3>UU PK</h3>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">bar_chart</span>
                    <h3>Statistik</h3>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">logout</span>
                    <h3>Logout</h3>
                </a>
            </div>
        </aside>
        {{-- END OF SIDEBAR --}}
        <main>
            <div class="uupk-head">
                <h1>UU PK</h1>
                {{-- <button type="submit" class="btn btn-primary btn-uupk-baru"><a href="#">+ UU PK</a></button> --}}
                <a href="#" class="btn btn-primary btn-uupk-baru"><span class="text-button">+ UU PK</span></a>
            </div>

            <div class="uupk">
                <article id="Senggigi" class="card">
                    <Section>
                        <div class="edit-uupk">
                            <h2>Senggigi Beach</h2>
                            <a href="#" class="btn btn-primary btn-edit-uupk"><span class="text-button">Edit UU PK</span></a>
                        </div>
        
                        <img src="../asset/pantai senggigi lombok.jpg" class="featured-image" alt="geografis">

                        <p>This beach is located on the west coast of Lombok Island. The white sand really spoils your eyes.
                            There are many things you can do like snorkeling or just sunbathing and relaxing.
                            When the sun sets, many people bury their bodies in the sand of Senggigi Beach because they are believed to have healing properties.</p>
                    </Section>
                </article>

                <article id="Senggigi" class="card">
                    <Section>
                        <div class="edit-uupk">
                            <h2>Senggigi Beach</h2>
                            <a href="#" class="btn btn-primary btn-edit-uupk"><span class="text-button">Edit UU PK</span></a>
                        </div>
        
                        <img src="../asset/pantai senggigi lombok.jpg" class="featured-image" alt="geografis">

                        <p>This beach is located on the west coast of Lombok Island. The white sand really spoils your eyes.
                            There are many things you can do like snorkeling or just sunbathing and relaxing.
                            When the sun sets, many people bury their bodies in the sand of Senggigi Beach because they are believed to have healing properties.</p>
                    </Section>
                </article>
            

            </div>

        </main>
    </div>
</body>

{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script> --}}
</html>