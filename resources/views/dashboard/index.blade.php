@extends('dashboard.layouts.main')

@section('title', 'Dashboard')

@section('content')

    <div class="pagetitle">
        <h1>Dashboard</h1>

    </div><!-- End Page Title -->

    {{-- Welcome Card --}}
    <div class="card shadow-sm border-0 mb-4">
        <div class="card-body d-flex align-items-center">
            <div class="welcome-icon rounded-circle d-flex align-items-center justify-content-center me-3">
                <i class="bi bi-person-circle fs-2 text-white"></i>
            </div>
            <div>
                <h5 class="mb-1">Selamat Datang 👋</h5>
                <p class="mb-0 text-muted">Senang melihatmu kembali, <strong>{{ Auth::user()->name }}</strong></p>
            </div>
        </div>
    </div>

    <a href="{{ url('/dashboard/berita/create') }}" class="btn btn-primary mb-3">
        <i class="bi bi-plus-lg"></i> Tambah Berita </a>

    <a href="{{ url('/dashboard/galery/create') }}" class="btn btn-primary mb-3">
        <i class="bi bi-plus-lg"></i> Tambah Gambar
    </a>

    <section class="section dashboard">
        <div class="row">
            <!-- Berita Card -->
            <div class="col-md-4">
                <div class="card info-card sales-card">
                    <div class="card-body">
                        <h5 class="card-title">Berita</h5>
                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="bi bi-newspaper"></i>
                            </div>
                            <div class="ps-3">
                                <h6>{{ $beritaCount }}</h6>
                                <span class="text-muted small pt-2">Total Artikel</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- End Berita Card -->

            <!-- Galeri Card -->
            <div class="col-md-4">
                <div class="card info-card revenue-card">
                    <div class="card-body">
                        <h5 class="card-title">Galeri</h5>
                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="bi bi-images"></i>
                            </div>
                            <div class="ps-3">
                                <h6>{{ $galeryCount }}</h6>
                                <span class="text-muted small pt-2">Total Gambar</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- End Galeri Card -->

            <!-- Kontak Card -->
            <div class="col-md-4">
                <div class="card info-card customers-card">
                    <div class="card-body">
                        <h5 class="card-title">Pesan Masuk</h5>
                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="bi bi-envelope-fill"></i>
                            </div>
                            <div class="ps-3">
                                <h6>{{ $kontakCount }}</h6>
                                <span class="text-muted small pt-2">Total Pesan</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- End Kontak Card -->
        </div>
    </section>

    

@endsection
