<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Galeri Kami - Tasty Food</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700;800&family=Poppins:wght@400;500&display=swap" rel="stylesheet">

    <style>
        /*--------------------------------------------------------------
        # General
        --------------------------------------------------------------*/
        body {
            font-family: 'Poppins', sans-serif;
            color: #444444;
            background-color: #f8f9fa;
        }

        .section {
            padding: 80px 0;
            overflow: hidden;
        }
        
        /*--------------------------------------------------------------
        # Navigation (Style dari halaman Kontak)
        --------------------------------------------------------------*/
        .navbar-custom {
            background: rgba(0,0,0,0.9) !important;
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
        # Hero Section Halaman "Galeri"
        --------------------------------------------------------------*/
        .hero-section-galeri {
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('https://images.unsplash.com/photo-1504754524776-8f4f37790774?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80') center center;
            background-size: cover;
            min-height: 50vh;
            color: white;
            padding-top: 80px;
        }

        .hero-section-galeri .breadcrumb a {
            color: #f8f9fa;
            text-decoration: none;
        }

        .hero-section-galeri .breadcrumb .active {
            color: #ffffff;
            font-weight: 600;
        }

        .hero-section-galeri .breadcrumb-item + .breadcrumb-item::before {
            color: #f8f9fa;
        }

        /*--------------------------------------------------------------
        # Slider Section
        --------------------------------------------------------------*/
        .slider-section {
            background-color: #ffffff;
        }

        .swiper-slide img {
            display: block;
            width: 100%;
            height: 500px; /* Atur tinggi slider */
            object-fit: cover;
            border-radius: 15px;
        }

        .swiper-button-next, .swiper-button-prev {
            color: #ffffff;
            background-color: rgba(0, 0, 0, 0.5);
            width: 50px;
            height: 50px;
            border-radius: 50%;
        }
        
        .swiper-button-next::after, .swiper-button-prev::after {
            font-size: 20px;
        }

        /*--------------------------------------------------------------
        # Gallery Grid Section
        --------------------------------------------------------------*/
        .gallery-grid .gallery-item {
            overflow: hidden;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        }

        .gallery-grid .gallery-item img {
            transition: transform 0.3s ease;
            width: 100%;
            height: 250px;
            object-fit: cover;
        }
        
        .gallery-grid .gallery-item:hover img {
            transform: scale(1.05);
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
        
        .footer p, .footer a {
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
                        <a class="nav-link" href="/berita">BERITA</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/galeri">GALERI</a>
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
        <section class="hero-section-galeri d-flex align-items-center justify-content-center">
            <div class="container text-center" data-aos="fade-up">
                <h1 class="display-3 fw-bold">GALERI KAMI</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="/">HOME</a></li>
                        <li class="breadcrumb-item active" aria-current="page">GALERI</li>
                    </ol>
                </nav>
            </div>
        </section>
        <!-- End Hero Section -->

        <!-- Slider Section -->
        <section class="slider-section section">
            <div class="container" data-aos="fade-up">
                @if($galeries->count() > 0)
                    <!-- Swiper -->
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            {{-- Tampilkan 3 gambar terbaru di slider --}}
                            @foreach($galeries->take(3) as $galery)
                                <div class="swiper-slide">
                                    <img src="{{ asset('storage/' . $galery->image) }}" alt="Slider Image">
                                </div>
                            @endforeach
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                @endif
            </div>
        </section>
        <!-- End Slider Section -->
        
        <!-- Gallery Grid Section -->
        <section class="gallery-grid section pt-0">
            <div class="container">
                <div class="row g-4">
                    @forelse($galeries as $index => $galery)
                        <div class="col-lg-3 col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="{{ 100 * ($index % 4) }}">
                            <div class="gallery-item">
                                <img src="{{ asset('storage/' . $galery->image) }}" alt="Galeri {{ $index + 1 }}">
                            </div>
                        </div>
                    @empty
                        <div class="col-12 text-center">
                            <p>Belum ada gambar di galeri saat ini. Silakan tambahkan gambar melalui dashboard admin.</p>
                        </div>
                    @endforelse
                </div>
            </div>
        </section>
        <!-- End Gallery Grid Section -->
        
    </main>
    <!-- End #main -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <h5>Tasty Food</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
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
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            AOS.init({
                duration: 1000,
                easing: 'ease-in-out',
                once: true,
                mirror: false
            });

            const swiper = new Swiper('.mySwiper', {
                loop: true,
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
            });
        });
    </script>
</body>
</html>