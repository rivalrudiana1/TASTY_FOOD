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
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu rutrum
                                commodo, dui diam convallis arcu, eget consectetur ex sem eget lacus. Nullam vitae dignissim
                                neque, vel luctus ex. Fusce sit amet viverra ante.</p>
                            <p>Praesent semper, enim quis tincidunt euismod, sem quam convallis elit, at semper sem lacus
                                sed sem. Aliquam erat volutpat. Donec quam nunc, pulvinar et dignissim non, malesuada vel
                                turpis. Nullam vitae dignissim neque, vel luctus ex. Fusce sit amet viverra ante.</p>
                        </div>
                        <div class="col-lg-6">
                            <div class="row g-4">
                                <div class="col-12" data-aos="fade-up" data-aos-delay="200">
                                    <img src="https://images.unsplash.com/photo-1512621776951-a57141f2eefd?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80"
                                        class="img-fluid rounded-3 shadow-sm" alt="Hidangan lezat">
                                </div>
                                <div class="col-12" data-aos="fade-up" data-aos-delay="300">
                                    <img src="https://images.unsplash.com/photo-1556742502-ec7c0e9f34b1?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80"
                                        class="img-fluid rounded-3 shadow-sm" alt="Chef sedang memasak">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="visi-misi" class="visi-misi section">
                <div class="container">
                    <div class="row align-items-center mb-5 pb-5 gy-5" data-aos="fade-up">
                        <div class="col-lg-6">
                            <div class="row g-4">
                                <div class="col-6">
                                    <img src="https://images.unsplash.com/photo-1482049016688-2d3e1b311543?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80"
                                        class="img-fluid rounded-3" alt="Makanan sehat">
                                </div>
                                <div class="col-6">
                                    <img src="https://images.unsplash.com/photo-1498837167922-ddd27525d352?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80"
                                        class="img-fluid rounded-3" alt="Ramen lezat">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 ps-lg-5">
                            <h3 class="section-title-left">VISI</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce scelerisque magna aliquet
                                cursus tempus. Duis viverra metus et turpis elementum elementum. Aliquam rutrum placerat
                                tellus et suscipit. Curabitur facilisis rhoncus tellus, at dignissim lorem. Ut ornare ex sit
                                amet ornare volutpat. Maecenas vel nunc tortor.</p>
                        </div>
                    </div>

                    <div class="row align-items-center gy-5" data-aos="fade-up">
                        <div class="col-lg-6 pe-lg-5 order-2 order-lg-1">
                            <h3 class="section-title-left">MISI</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce scelerisque magna aliquet
                                cursus tempus. Duis viverra metus et turpis elementum elementum. Aliquam rutrum placerat
                                tellus et suscipit. Curabitur facilisis rhoncus tellus, at dignissim lorem. Ut ornare ex sit
                                amet ornare volutpat. Maecenas vel nunc tortor.</p>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2">
                            <div class="row g-4">
                                <div class="col-6">
                                    <img src="https://images.unsplash.com/photo-1496116218417-1a781b1c416c?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80"
                                        class="img-fluid rounded-3" alt="Bahan masakan segar">
                                </div>
                                <div class="col-6">
                                    <img src="https://images.unsplash.com/photo-1625944230942-7809a744268e?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80"
                                        class="img-fluid rounded-3" alt="Sayuran segar">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </body>

    </html>
