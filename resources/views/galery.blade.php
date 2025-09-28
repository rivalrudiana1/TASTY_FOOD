@extends('layouts.app')

@section('title', 'Tasty Food - Healthy Tasty Food')

@section('content')

<body>
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