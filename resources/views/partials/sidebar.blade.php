<aside>
    <div class="top">
        <div class="logo">
            <a href="/pengaduanunresolved">
                <img src="../asset/logo-kemendag.png">
            </a>
        </div>
        <div class="close" id="close-btn">
            <span class="material-icons-sharp">close</span>
        </div>
    </div>

    <div class="sidebar">
        @auth
        <a class="profile-bar">
            <img class="profile-pict" src="../asset/profilepic.webp">
            <h3>{{ auth()->user()->name }}</h3>
        </a>
        @endauth
        <a href="/pengaduanunresolved" class="{{ ($title === "Pengaduan Unresolved") || ($title === "Pengaduan Process") || ($title === "Pengaduan Mediasi") || ($title === "Pengaduan Done") || ($title === "Detail Pengaduan") ? 'active' : '' }}">
            <span class="material-icons-sharp">receipt_long</span>
            <h3>Pengaduan</h3>
        </a>

        <a href="/berita" class="{{ ($title === "Berita") || ($title === "Input Berita") || ($title === "Edit Berita") ? 'active' : '' }}">
            <span class="material-icons-sharp">newspaper</span>
            <h3>Berita</h3>
        </a>

        <a href="/uupk" class="{{ ($title === "UU Pengaduan Konsumen") || ($title === "Input UUPK") || ($title === "Edit UUPK") ? 'active' : '' }}">
            <span class="material-icons-sharp">list_alt</span>
            <h3>UU PK</h3>
        </a>

        <a href="/statistic" class="{{ ($title === "Statistik") ? 'active' : '' }}">
            <span class="material-icons-sharp">bar_chart</span>
            <h3>Statistik</h3>
        </a>
        
        <a href="/logout">
            @csrf
            <span class="material-icons-sharp">logout</span>
            <h3>Logout</h3>
        </a>
        {{-- <form action="/logout" method="get">
            @csrf
            <button type="submit" class="dropdown-item material-icons-sharp">Logout</button>
        </form> --}}
    </div>
</aside>