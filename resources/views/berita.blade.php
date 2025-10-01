@extends('layouts.app')

@section('title', 'Tasty Food - Healthy Tasty Food')

@section('content')

    <body>

        <main class="main">
            <!-- Hero Section -->
            <section class="hero-section-berita d-flex align-items-center justify-content-center">
                <div class="container text-center" data-aos="fade-up">
                    <h1 class="display-3 fw-bold text-white">BERITA KAMI</h1>
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
                                    <a href="#" class="btn btn-baca">Baca Selengkapnya</a>
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
                                            <a href="#" class="read-more-link">Baca selengkapnya >></a>
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
    </body>

    </html>
