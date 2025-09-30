@extends('layouts.app')

@section('title', 'Tasty Food - Healthy Tasty Food')

@section('content')

    <body>

        <main class="main">
            <section class="hero hero-tentang d-flex align-items-center justify-content-center">
                <div class="container text-center" data-aos="fade-up">
                    <h1 class="display-3 fw-bold text-white">TENTANG KAMI</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="/">HOME</a></li>
                            <li class="breadcrumb-item active" aria-current="page">TENTANG</li>
                        </ol>
                    </nav>
                </div>
            </section>

            <section id="intro-tentang" class="intro-tentang section bg-light">
                <div class="container" data-aos="fade-up">
                    <div class="row align-items-center gy-5">
                        <div class="col-lg-6">
                            <h2 class="section-title-left">{{ $tentang->judul ?? 'TASTY FOOD' }}</h2>
                            <div class="description">
                                {!! nl2br(e($tentang->deskripsi ?? 'Informasi akan ditampilkan di sini.')) !!}
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="row g-4">
                                @if($tentang && $tentang->gambar_deskripsi)
                                    <div class="col-12" data-aos="fade-up" data-aos-delay="200">
                                        <img src="{{ asset('storage/' . $tentang->gambar_deskripsi) }}"
                                            class="img-fluid rounded-3 shadow-sm w-100 object-fit-cover"
                                            alt="Deskripsi Tasty Food"
                                            style="height: 400px;">
                                    </div>
                                @else
                                    <div class="col-6" data-aos="fade-up" data-aos-delay="200">
                                        <img src="{{ asset('assets/img/brooke-lark-oaz0raysASk-unsplash.jpg') }}"
                                            class="img-fluid rounded-3 shadow-sm w-100 h-100 object-fit-cover"
                                            alt="Hidangan lezat">
                                    </div>
                                    <div class="col-6" data-aos="fade-up" data-aos-delay="300">
                                        <img src="{{ asset('assets/img/sebastian-coman-photography-eBmyH7oO5wY-unsplash.jpg') }}"
                                            class="img-fluid rounded-3 shadow-sm w-100 h-100 object-fit-cover"
                                            alt="Chef sedang memasak">
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="visi-misi" class="visi-misi section">
                <div class="container">

                    <!-- VISI -->
                    <div class="row align-items-center mb-5 pb-5 gy-5" data-aos="fade-up">
                        <div class="col-lg-6">
                            <div class="row g-4">
                                @if($tentang && $tentang->gambar_visi)
                                    <div class="col-12">
                                        <div class="square-img">
                                            <img src="{{ asset('storage/' . $tentang->gambar_visi) }}"
                                                class="img-fluid rounded-3 shadow-sm" alt="Visi Tasty Food">
                                        </div>
                                    </div>
                                @else
                                    <div class="col-6">
                                        <div class="square-img">
                                            <img src="{{ asset('assets/img/fathul-abrar-T-qI_MI2EMA-unsplash.jpg') }}"
                                                class="img-fluid rounded-3 shadow-sm" alt="Makanan sehat">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="square-img">
                                            <img src="{{ asset('assets/img/michele-blackwell-rAyCBQTH7ws-unsplash.jpg') }}"
                                                class="img-fluid rounded-3 shadow-sm" alt="Ramen lezat">
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-6 ps-lg-5">
                            <h3 class="section-title-left">VISI</h3>
                            <div class="description">
                                {!! nl2br(e($tentang->visi ?? 'Visi akan ditampilkan di sini.')) !!}
                            </div>
                        </div>
                    </div>

                    <!-- MISI -->
                    <div class="row align-items-center gy-5" data-aos="fade-up">
                        <div class="col-lg-6 pe-lg-5 order-2 order-lg-1">
                            <h3 class="section-title-left">MISI</h3>
                            @if($tentang && $tentang->misi)
                                <ol>
                                    @foreach(explode("\n", $tentang->misi) as $misiItem)
                                        @if(trim($misiItem))
                                            <li>{{ trim($misiItem) }}</li>
                                        @endif
                                    @endforeach
                                </ol>
                            @else
                                <p>Misi akan ditampilkan di sini.</p>
                            @endif
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2">
                            <div class="rect-img">
                                @if($tentang && $tentang->gambar_misi)
                                    <img src="{{ asset('storage/' . $tentang->gambar_misi) }}"
                                        class="img-fluid rounded-3 shadow-sm" alt="Misi Tasty Food">
                                @else
                                    <img src="{{ asset('assets/img/sanket-shah-SVA7TyHxojY-unsplash.jpg') }}"
                                        class="img-fluid rounded-3 shadow-sm" alt="Sayuran segar">
                                @endif
                            </div>
                        </div>
                    </div>

                </div>
            </section>

        </main>
    </body>

    </html>
