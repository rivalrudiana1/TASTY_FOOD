<header id="header" class="navbar navbar-expand-lg fixed-top">
    <div class="container">
        <!-- Brand -->
        <a class="navbar-brand fw-bold text-dark" href="{{ url('/') }}">TASTY FOOD</a>

        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menu -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto"> {{-- Menu otomatis ke kanan --}}
                <li class="nav-item">
                    <a class="nav-link text-dark {{ Request::is('/') ? 'active' : '' }}"
                        href="{{ url('/') }}">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark {{ Request::is('tentang') ? 'active' : '' }}"
                        href="{{ url('/tentang') }}">TENTANG</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark {{ Request::is('berita') ? 'active' : '' }}"
                        href="{{ url('/berita') }}">BERITA</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark {{ Request::is('galery') ? 'active' : '' }}"
                        href="{{ url('/galery') }}">GALERI</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark {{ Request::is('kontak') ? 'active' : '' }}"
                        href="{{ url('/kontak') }}">KONTAK</a>
                </li>
            </ul>
        </div>
    </div>
</header>
