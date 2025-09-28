@extends('dashboard.layouts.main')

@section('title', 'Dashboard')

@section('content')
    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

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
