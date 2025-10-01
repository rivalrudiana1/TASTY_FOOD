@extends('layouts.app')

@section('title', 'Tasty Food - Healthy Tasty Food')

@section('content')

    <body>
        
        <main class="main">
            <!-- Hero Section -->
            <section class="hero hero-kontak d-flex align-items-center justify-content-center">
                <div class="container text-center" data-aos="fade-up">
                    <h1 class="display-3 fw-bold text-white">KONTAK KAMI</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">HOME</a></li>
                            <li class="breadcrumb-item active" aria-current="page">KONTAK</li>
                        </ol>
                    </nav>
                </div>
            </section>
            <!-- End Hero Section -->

            <!-- Contact Form Section -->
            <section class="contact-section">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">

                            {{-- Menampilkan Pesan Sukses --}}
                            @if (session('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('success') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif

                            <div class="contact-form" data-aos="fade-up">
                                <h2 class="section-title text-center">KIRIM PESAN</h2>


                                <form action="{{ route('kontak.store') }}" method="POST" class="row g-3" id="kontakForm">
                                    @csrf

                                    <div class="mb-3">
                                        <label for="name" class="form-label">Nama <span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                                            id="name" name="name" value="{{ old('name') }}" required>
                                        @error('name')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email <span
                                                class="text-danger">*</span></label>
                                        <input type="email" class="form-control @error('email') is-invalid @enderror"
                                            id="email" name="email" value="{{ old('email') }}" required>
                                        @error('email')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="subject" class="form-label">Subjek <span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control @error('subject') is-invalid @enderror"
                                            id="subject" name="subject" value="{{ old('subject') }}" required>
                                        @error('subject')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="message" class="form-label">Pesan <span
                                                class="text-danger">*</span></label>
                                        <textarea class="form-control @error('message') is-invalid @enderror" id="message" name="message" rows="5"
                                            required>{{ old('message') }}</textarea>
                                        @error('message')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul class="mb-0">
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif

                                    <div class="col-12 text-center mt-4">
                                        <button type="submit" class="btn btn-submit">
                                            KIRIM PESAN
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Contact Info Cards -->
            <section class="contact-info">
                <div class="container">
                    <div class="row g-4">
                        <div class="col-lg-4 col-md-6">
                            <div class="contact-card" data-aos="fade-up" data-aos-delay="100">
                                <div class="contact-icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <h4>EMAIL</h4>
                                <p>tastyfood@gmail.com</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="contact-card" data-aos="fade-up" data-aos-delay="200">
                                <div class="contact-icon">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <h4>TELEPON</h4>
                                <p>+62 812 3456 7890</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="contact-card" data-aos="fade-up" data-aos-delay="300">
                                <div class="contact-icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <h4>LOKASI</h4>
                                <p>Kota Bandung, Jawa Barat</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Map Section -->
            <section class="map-section">
                <div class="container-fluid px-0">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126748.56347852171!2d107.57311693355527!3d-6.903444341656083!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e6398252477f%3A0x146a1f93d3e815b2!2sBandung%2C%20Kota%20Bandung%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1624083049289!5m2!1sid!2sid"
                        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </section>
        </main>

    </body>

    </html>
