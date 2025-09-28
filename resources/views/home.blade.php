@extends('layouts.app')

@section('title', 'Tasty Food - Healthy Tasty Food')

@section('content')

    {{-- Catatan: Tag <body> dan <header> di bawah ini seharusnya berada di file layout/partials,
         namun saya sesuaikan sesuai permintaan Anda untuk mengganti header & footer di file ini. --}}

    <body class="index-page">
        <!-- ======= Header ======= -->
        @include('partials.navbar')


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
                                <p class="mb-3 color-dark">Lorem ipsum dolor sit amet, consectetur
                                    adipiscing elit. Phasellus ornare, augue eu rutrum commodo, dui diam convallis arcu,
                                    eget consectetur ex sem eget lacus. Nullam vitae dignissim neque, vel luctus ex. Fusce
                                    sit amet viverra ante.</p>
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


        </main>

        <!-- Scroll Top -->
        <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
                class="bi bi-arrow-up-short"></i></a>

    </body>

@endsection
