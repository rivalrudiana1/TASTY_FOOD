@extends('layouts.app')

@section('title', 'Tasty Food - Healthy Tasty Food')

@section('content')

    {{-- Catatan: Tag <body> dan <header> di bawah ini seharusnya berada di file layout/partials,
         namun saya sesuaikan sesuai permintaan Anda untuk mengganti header & footer di file ini. --}}

    <body class="index-page">

        <main class="main">

            <!-- Hero Section -->
            <section id="home" class="hero section light-background">
                <div class="container" data-aos="fade-up" data-aos-delay="100">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="hero-content">
                                <h1 data-aos="fade-up" data-aos-delay="200">HEALTHY<br><strong>TASTY FOOD</strong></h1>
                                <div class="hero-divider" data-aos="fade-up" data-aos-delay="250"></div>
                                <p data-aos="fade-up" data-aos-delay="300">Lorem ipsum dolor sit amet, consectetur
                                    adipiscing elit. Phasellus ornare, augue eu rutrum commodo, dui diam convallis arcu,
                                    eget consectetur ex sem eget lacus. Nullam vitae dignissim neque, vel luctus ex. Fusce
                                    sit amet viverra ante.</p>
                                <div class="hero-cta" data-aos="fade-up" data-aos-delay="400">
                                    <a href="#tentang" class="btn-primary">TENTANG KAMI</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="hero-image" data-aos="fade-left" data-aos-delay="300">
                                <div class="food-circle">
                                    <img src="{{ asset('assets/img/img-4-2000x2000.png') }}" alt="Tasty Food Platter"
                                        style="max-width: 500px;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section><!-- /Hero Section -->

            <!-- About Section -->
            <section id="tentang" class="about section">
                <div class="container section-title" data-aos="fade-up">
                    <h2>TENTANG KAMI</h2>
                    <div class="section-divider"></div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu rutrum commodo,
                        dui diam convallis arcu, eget consectetur ex sem eget lacus. Nullam vitae dignissim neque, vel
                        luctus ex. Fusce sit amet viverra ante.</p>
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
            <section id="berita" class="news section light-background">
                <div class="container section-title" data-aos="fade-up">
                    <h2>BERITA KAMI</h2>
                </div>
                <div class="container" data-aos="fade-up" data-aos-delay="100">
                    <div class="row">
                        @if ($beritas->isNotEmpty())
                            {{-- Berita Utama --}}
                            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                                <div class="featured-news">
                                    <div class="featured-image">
                                        <img src="{{ asset('storage/' . $beritas->first()->image) }}"
                                            alt="{{ $beritas->first()->title }}" class="img-fluid">
                                    </div>
                                    <div class="featured-content">
                                        <h4>{{ $beritas->first()->title }}</h4>
                                        <p>{{ Str::limit($beritas->first()->content, 150) }}</p>
                                    </div>
                                </div>
                            </div>
                            {{-- Berita Lainnya --}}
                            <div class="col-lg-6">
                                <div class="row gy-4">
                                    @foreach ($beritas->skip(1) as $berita)
                                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                                            <div class="news-item">
                                                <div class="news-image">
                                                    <img src="{{ asset('storage/' . $berita->image) }}"
                                                        alt="{{ $berita->title }}" class="img-fluid">
                                                </div>
                                                <div class="news-content">
                                                    <h5>{{ $berita->title }}</h5>
                                                    <p>{{ Str::limit($berita->content, 50) }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @else
                            <div class="col-12 text-center">
                                <p>Belum ada berita yang tersedia saat ini.</p>
                            </div>
                        @endif
                    </div>
                </div>
            </section><!-- /News Section -->

            <!-- Gallery Section (Dinamis) -->
            <section id="galeri" class="gallery section">
                <div class="container section-title" data-aos="fade-up">
                    <h2>GALERI KAMI</h2>
                </div>
                <div class="container" data-aos="fade-up" data-aos-delay="100">
                    <div class="row gy-4">
                        @forelse($galeries as $galery)
                            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                                <div class="gallery-item">
                                    <img src="{{ asset('storage/' . $galery->image) }}" alt="Gallery Image"
                                        class="img-fluid">
                                </div>
                            </div>
                        @empty
                            <div class="col-12 text-center">
                                <p>Belum ada gambar di galeri saat ini.</p>
                            </div>
                        @endforelse
                    </div>
                    @if ($galeries->count() > 0)
                        <div class="text-center mt-5" data-aos="fade-up" data-aos-delay="800">
                            <a href="galery" class="btn-secondary">LIHAT LEBIH BANYAK</a>
                        </div>
                    @endif
                </div>
            </section><!-- /Gallery Section -->

        </main>

        <!-- Scroll Top -->
        <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
                class="bi bi-arrow-up-short"></i></a>

    </body>

@endsection
