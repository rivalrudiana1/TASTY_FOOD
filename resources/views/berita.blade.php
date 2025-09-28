<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Berita Kami - Tasty Food</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700;800&family=Poppins:wght@400;500&display=swap"
        rel="stylesheet">

    <style>
        /*--------------------------------------------------------------
        # General
        --------------------------------------------------------------*/
        body {
            font-family: 'Poppins', sans-serif;
            color: #444444;
            background-color: #f8f9fa;
            /* Warna dasar abu-abu muda */
        }

        .section {
            padding: 80px 0;
            overflow: hidden;
        }

        /*--------------------------------------------------------------
        # Navigation (Style dari halaman Kontak)
        --------------------------------------------------------------*/
        .navbar-custom {
            background: rgba(0, 0, 0, 0.9) !important;
            padding: 15px 0;
            transition: all 0.3s ease;
        }

        .navbar-brand {
            font-size: 1.8rem;
            font-weight: bold;
            color: white !important;
            font-family: 'Montserrat', sans-serif;
        }

        .navbar-nav .nav-link {
            color: white !important;
            margin: 0 15px;
            font-weight: 500;
            text-transform: uppercase;
            font-size: 0.9rem;
        }

        .navbar-nav .nav-link:hover,
        .navbar-nav .nav-link.active {
            color: #ffc107 !important;
        }

        /*--------------------------------------------------------------
        # Hero Section Halaman "Berita"
        --------------------------------------------------------------*/
        .hero-section-berita {
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('https://images.unsplash.com/photo-1504754524776-8f4f37790774?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80') center center;
            background-size: cover;
            min-height: 50vh;
            color: white;
            padding-top: 80px;
            /* Jarak dari header */
        }

        .hero-section-berita .breadcrumb a {
            color: #f8f9fa;
            text-decoration: none;
        }

        .hero-section-berita .breadcrumb .active {
            color: #ffffff;
            font-weight: 600;
        }

        .hero-section-berita .breadcrumb-item+.breadcrumb-item::before {
            color: #f8f9fa;
        }

        /*--------------------------------------------------------------
        # Featured Article Section
        --------------------------------------------------------------*/
        .featured-article {
            background-color: #ffffff;
        }

        .featured-article .featured-content h2 {
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
            font-size: 2.2rem;
            margin-bottom: 20px;
        }

        .featured-article .featured-content p {
            line-height: 1.8;
            color: #666;
            margin-bottom: 20px;
        }

        .btn-baca {
            background: #000;
            color: white;
            padding: 12px 30px;
            border: none;
            border-radius: 5px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: all 0.3s ease;
        }

        .btn-baca:hover {
            background: #333;
        }

        /*--------------------------------------------------------------
        # Berita Lainnya Section
        --------------------------------------------------------------*/
        .other-news .section-title {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 50px;
            text-transform: uppercase;
            font-family: 'Montserrat', sans-serif;
        }

        .news-card {
            background: #ffffff;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            height: 100%;
            overflow: hidden;
        }

        .news-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        .news-card img {
            width: 100%;
            height: 180px;
            object-fit: cover;
        }

        .news-card-body {
            padding: 20px;
        }

        .news-card-title {
            font-weight: 700;
            font-size: 1.1rem;
            margin-bottom: 10px;
            color: #333;
        }

        .news-card-text {
            color: #666;
            font-size: 0.9rem;
            margin-bottom: 15px;
        }

        .read-more-link {
            color: #ffc107;
            font-weight: 500;
            text-decoration: none;
            font-size: 0.9rem;
        }

        .read-more-link:hover {
            color: #e0a800;
        }

        /*--------------------------------------------------------------
        # Footer (Style dari halaman Kontak)
        --------------------------------------------------------------*/
        .footer {
            background: #1a1a1a;
            color: #ccc;
            padding: 60px 0 30px;
        }

        .footer h5 {
            color: #ffc107;
            margin-bottom: 25px;
            font-weight: 700;
            font-family: 'Montserrat', sans-serif;
        }

        .footer p,
        .footer a {
            color: #ccc;
            text-decoration: none;
            line-height: 1.8;
        }

        .footer a:hover {
            color: #ffc107;
        }

        .footer .footer-links {
            list-style: none;
            padding: 0;
        }

        .footer .footer-links li {
            margin-bottom: 10px;
        }

        .footer .social-icons a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 45px;
            height: 45px;
            background: #333;
            border-radius: 50%;
            margin-right: 10px;
            color: white;
            transition: all 0.3s ease;
        }

        .footer .social-icons a:hover {
            background: #ffc107;
            transform: translateY(-3px);
        }

        .footer .copyright {
            text-align: center;
            padding-top: 30px;
            margin-top: 40px;
            border-top: 1px solid #333;
            color: #666;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
        <div class="container">
            <a class="navbar-brand" href="/">TASTY FOOD</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/tentang">TENTANG</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/berita">BERITA</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/galery">GALERI</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/kontak">KONTAK</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="main">
        <!-- Hero Section -->
        <section class="hero-section-berita d-flex align-items-center justify-content-center">
            <div class="container text-center" data-aos="fade-up">
                <h1 class="display-3 fw-bold">BERITA KAMI</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="/">HOME</a></li>
                        <li class="breadcrumb-item active" aria-current="page">BERITA</li>
                    </ol>
                </nav>
            </div>
        </section>
        <!-- End Hero Section -->

        @if ($beritas->isNotEmpty())
            <!-- Featured Article -->
            <section class="featured-article section">
                <div class="container">
                    <div class="row align-items-center gy-5">
                        <div class="col-lg-5" data-aos="fade-right">
                            <img src="{{ asset('storage/' . $beritas->first()->image) }}"
                                class="img-fluid rounded-3 shadow" alt="{{ $beritas->first()->title }}">
                        </div>
                        <div class="col-lg-7" data-aos="fade-left">
                            <div class="featured-content ps-lg-5">
                                <h2>{{ $beritas->first()->title }}</h2>
                                <p>{{ Str::limit($beritas->first()->content, 300) }}</p>
                                <a href="{{ route('berita.show', $beritas->first()->id) }}"
                                    class="btn btn-baca">Baca Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Featured Article -->

            <!-- Other News Section -->
            <section class="other-news section pt-0">
                <div class="container">
                    <h2 class="section-title text-center" data-aos="fade-up">BERITA LAINNYA</h2>
                    <div class="row g-4">
                        @forelse($beritas->skip(1) as $index => $berita)
                            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="{{ 100 * ($index % 4) }}">
                                <div class="news-card">
                                    <img src="{{ asset('storage/' . $berita->image) }}" class="card-img-top"
                                        alt="{{ $berita->title }}">
                                    <div class="news-card-body">
                                        <h5 class="news-card-title">{{ $berita->title }}</h5>
                                        <p class="news-card-text">{{ Str::limit($berita->content, 80) }}</p>
                                        <a href="{{ route('berita.showPublic', $berita->id) }}"
                                            class="read-more-link">Baca selengkapnya >></a>
                                    </div>
                                </div>
                            </div>
                        @empty
                            {{-- This part will not be shown if there's at least one featured article --}}
                        @endforelse
                    </div>
                </div>
            </section>
            <!-- End Other News Section -->
        @else
            <section class="section text-center">
                <div class="container">
                    <p>Belum ada berita yang tersedia saat ini. Silakan kembali lagi nanti.</p>
                </div>
            </section>
        @endif

    </main>
    <!-- End #main -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <h5>Tasty Food</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                    <div class="social-icons">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 mb-4">
                    <h5>Useful links</h5>
                    <ul class="footer-links">
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Galeri</a></li>
                        <li><a href="#">Testimonial</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6 mb-4">
                    <h5>Privacy</h5>
                    <ul class="footer-links">
                        <li><a href="#">Karir</a></li>
                        <li><a href="#">Tentang Kami</a></li>
                        <li><a href="#">Kontak Kami</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <h5>Contact Info</h5>
                    <p><i class="fas fa-envelope me-2"></i> tastyfood@gmail.com</p>
                    <p><i class="fas fa-phone me-2"></i> +62 812 3456 7890</p>
                    <p><i class="fas fa-map-marker-alt me-2"></i> Kota Bandung, Jawa Barat</p>
                </div>
            </div>
            <div class="copyright">
                <p>Copyright ©2025 All rights reserved</p>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            AOS.init({
                duration: 1000,
                easing: 'ease-in-out',
                once: true,
                mirror: false
            });
        });
    </script>
</body>

</html>
