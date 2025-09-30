<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>@yield('title', 'Tasty Food')</title>

    <!-- Favicons -->
    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files (Lokal) -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('assets/css/home.css') }}" rel="stylesheet">
</head>

<body class="index-page">
    <!-- ======= Header ======= -->
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

    <main class="main">

        <!-- Hero Section -->
        <section id="home" class="hero section light-background">
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="hero-content">
                            <div class="hero-divider" data-aos="fade-up" data-aos-delay="250"></div>
                            <h1 class="mb-3" data-aos="fade-up" data-aos-delay="200">HEALTHY<br><strong>TASTY
                                    FOOD</strong></h1>
                            <p class="mb-3 color-dark">Mau makan enak tanpa takut nggak sehat? Tasty Food jawabannya!
                                Dari bahan fresh sampai rasa yang bikin nagih, semua diracik khusus buat kamu yang
                                peduli sama kesehatan tapi tetap pengen makan enak. 🌿✨</p>
                            <div class="hero-cta" data-aos="fade-up" data-aos-delay="400">
                                <a href="/tentang" class="btn-primary">TENTANG KAMI</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 text-center" data-aos="fade-left" data-aos-delay="300">
                        <img src="{{ asset('assets/img/img-4-2000x2000.png') }}" alt="Tasty Food Platter"
                            class="img-fluid hero-img">
                    </div>
                </div>
            </div>
        </section><!-- /Hero Section -->

        <!-- About Section -->
        <section id="tentang" class="about section">
            <div class="container section-title" data-aos="fade-up">
                <h2>TENTANG KAMI</h2>
                <div class="section-divider"></div>
                <p>Tasty Food adalah tempat di mana cita rasa berkualitas bertemu dengan pengalaman kuliner yang
                    menyenangkan. Kami berkomitmen menyajikan hidangan lezat dengan bahan-bahan pilihan, diolah dengan
                    penuh ketelitian dan kreativitas.

                    Bagi kami, makanan bukan hanya sekadar kebutuhan, tetapi juga cara untuk menghadirkan kebahagiaan,
                    kebersamaan, dan cerita di setiap sajian. Dengan pelayanan ramah dan suasana yang nyaman, Tasty Food
                    siap menjadi pilihan terbaik untuk menikmati momen spesial Anda.</p>
            </div>
        </section><!-- /About Section -->

        <!-- Services Section -->
        <section id="services" class="services section"
            style="background: url('{{ asset('assets/img/Group 70@2x.png') }}') no-repeat center center/cover; position: relative;">

            <!-- Overlay gelap transparan -->
            <div style="background: rgba(0,0,0,0.6); position: absolute; inset: 0;"></div>

            <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
                <div class="row gy-4">
                    {{-- Service 1 --}}
                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-item text-center p-4 rounded shadow-lg bg-white bg-opacity-90 h-100">
                            <div class="service-image mb-3">
                                <img src="{{ asset('assets/img/img-1.png') }}" alt="Service 1" class="img-fluid"
                                    style="max-height: 120px;">
                            </div>
                            <h3 class="fw-bold">LOREM IPSUM</h3>
                            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus
                                ornare, augue eu rutrum commodo.</p>
                        </div>
                    </div>

                    {{-- Service 2 --}}
                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-item text-center p-4 rounded shadow-lg bg-white bg-opacity-90 h-100">
                            <div class="service-image mb-3">
                                <img src="{{ asset('assets/img/img-2.png') }}" alt="Service 2" class="img-fluid"
                                    style="max-height: 120px;">
                            </div>
                            <h3 class="fw-bold">LOREM IPSUM</h3>
                            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus
                                ornare, augue eu rutrum commodo.</p>
                        </div>
                    </div>

                    {{-- Service 3 --}}
                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="service-item text-center p-4 rounded shadow-lg bg-white bg-opacity-90 h-100">
                            <div class="service-image mb-3">
                                <img src="{{ asset('assets/img/img-3.png') }}" alt="Service 3" class="img-fluid"
                                    style="max-height: 120px;">
                            </div>
                            <h3 class="fw-bold">LOREM IPSUM</h3>
                            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus
                                ornare, augue eu rutrum commodo.</p>
                        </div>
                    </div>

                    {{-- Service 4 --}}
                    <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="500">
                        <div class="service-item text-center p-4 rounded shadow-lg bg-white bg-opacity-90 h-100">
                            <div class="service-image mb-3">
                                <img src="{{ asset('assets/img/img-4.png') }}" alt="Service 4" class="img-fluid"
                                    style="max-height: 120px;">
                            </div>
                            <h3 class="fw-bold">LOREM IPSUM</h3>
                            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus
                                ornare, augue eu rutrum commodo.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Services Section -->


        <!-- News Section (Dinamis) -->
        <section id="berita" class="news section py-5 bg-light">
            <div class="container" data-aos="fade-up">
                <div class="section-title text-center mb-5">
                    <h2 class="fw-bold">BERITA KAMI</h2>
                </div>
                <div class="row g-4">
                    @if ($beritas->isNotEmpty())
                        <!-- Berita Utama -->
                        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                            <div class="card border-0 shadow-sm h-100">
                                <img src="{{ asset('storage/' . $beritas->first()->image) }}"
                                    alt="{{ $beritas->first()->title }}" class="card-img-top img-fluid rounded">
                                <div class="card-body">
                                    <h4 class="card-title fw-bold">{{ $beritas->first()->title }}</h4>
                                    <p class="card-text text-muted">
                                        {{ Str::limit($beritas->first()->content, 200) }}
                                    </p>
                                    <a href="{{ route('berita.show', $beritas->first()->id) }}"
                                        class="text-decoration-none text-primary fw-semibold ">
                                        Baca selengkapnya →
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Berita Lainnya -->
                        <div class="col-lg-6">
                            <div class="row g-4">
                                @foreach ($beritas->skip(1) as $berita)
                                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                                        <div class="card border-0 shadow-sm h-100">
                                            <img src="{{ asset('storage/' . $berita->image) }}"
                                                alt="{{ $berita->title }}" class="card-img-top img-fluid rounded">
                                            <div class="card-body">
                                                <h6 class="card-title fw-bold">{{ $berita->title }}</h6>
                                                <p class="card-text text-muted small">
                                                    {{ Str::limit($berita->content, 80) }}
                                                </p>
                                                <a href="{{ route('berita.show', $berita->id) }}"
                                                    class="text-decoration-none text-warning fw-semibold">
                                                    Baca selengkapnya
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @else
                        <div class="col-12 text-center">
                            <p class="text-muted">Belum ada berita yang tersedia saat ini.</p>
                        </div>
                    @endif
                </div>
            </div>
        </section>



        <!-- Gallery Section -->
        <section id="galeri" class="gallery section py-5 bg-white">
            <div class="container" data-aos="fade-up">
                <!-- Judul -->
                <div class="section-title text-center mb-5">
                    <h2 class="fw-bold">GALERI KAMI</h2>
                </div>

                <!-- Grid Galeri -->
                <div class="row g-4">
                    @forelse($galeries as $galery)
                        <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                            <div class="gallery-item position-relative overflow-hidden rounded shadow-sm">
                                <img src="{{ asset('storage/' . $galery->image) }}" alt="Gallery Image"
                                    class="img-fluid w-100 h-100 gallery-img">
                                <!-- Overlay -->
                                <div class="gallery-overlay d-flex align-items-center justify-content-center">
                                    <span class="text-white fw-semibold">Lihat</span>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-12 text-center">
                            <p class="text-muted">Belum ada gambar di galeri saat ini.</p>
                        </div>
                    @endforelse
                </div>

                <!-- Tombol Lihat Lebih Banyak -->
                @if ($galeries->count() > 0)
                    <div class="text-center mt-5" data-aos="fade-up" data-aos-delay="800">
                        <a href="{{ url('/galery') }}" class="btn-primary">
                            LIHAT LEBIH BANYAK
                        </a>
                    </div>
                @endif
            </div>
        </section>

        @include('partials.footer')

    </main>

    <!-- Scroll Top Button -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files (Lokal) -->
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

    <!-- Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
