@extends('layouts.app')

@section('title', 'Tasty Food - Healthy Tasty Food')

@section('content')

    <body>

        <!-- ======= Header ======= -->
        @include('partials.navbar')

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
                            <h2 class="section-title-left">TASTY FOOD</h2>
                            <p>Tasty Food adalah tempat di mana cita rasa berkualitas bertemu dengan pengalaman kuliner yang
                                menyenangkan. Kami berkomitmen menyajikan hidangan lezat dengan bahan-bahan pilihan, diolah
                                dengan penuh ketelitian dan kreativitas.</p>
                            <p>Bagi kami, makanan bukan hanya sekadar kebutuhan, tetapi juga cara untuk menghadirkan
                                kebahagiaan, kebersamaan, dan cerita di setiap sajian. Dengan pelayanan ramah dan suasana
                                yang nyaman, Tasty Food siap menjadi pilihan terbaik untuk menikmati momen spesial Anda.</p>
                        </div>
                        <div class="col-lg-6">
                            <div class="row g-4">
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
                            </div>
                        </div>
                        <div class="col-lg-6 ps-lg-5">
                            <h3 class="section-title-left">VISI</h3>
                            <p>
                                Menjadi penyedia kuliner yang menghadirkan pengalaman rasa terbaik dengan bahan segar, cita
                                rasa autentik, serta pelayanan hangat yang memuaskan setiap pelanggan.
                            </p>
                        </div>
                    </div>

                    <!-- MISI -->
                    <div class="row align-items-center gy-5" data-aos="fade-up">
                        <div class="col-lg-6 pe-lg-5 order-2 order-lg-1">
                            <h3 class="section-title-left">MISI</h3>
                            <ol>
                                <li>Menyajikan makanan dengan kualitas tinggi menggunakan bahan segar pilihan.</li>
                                <li>Menghadirkan variasi menu inovatif yang tetap mempertahankan cita rasa khas.</li>
                                <li>Memberikan pelayanan ramah, cepat, dan profesional untuk kepuasan pelanggan.</li>
                                <li>Membangun suasana restoran yang nyaman dan bersahabat bagi semua kalangan.</li>
                            </ol>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2">
                            <div class="rect-img">
                                <img src="{{ asset('assets/img/sanket-shah-SVA7TyHxojY-unsplash.jpg') }}"
                                    class="img-fluid rounded-3 shadow-sm" alt="Sayuran segar">
                            </div>
                        </div>
                    </div>

                </div>
            </section>

        </main>
    </body>

    </html>
