@extends('dashboard.layouts.main')

@section('title', 'Manajemen Galeri')

@section('content')
    <div class="pagetitle">
        <h1>Manajemen Galeri</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">Galeri</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Data Galeri</h5>
                        <a href="{{ url('/dashboard/galery/create') }}" class="btn btn-primary mb-3">
                            <i class="bi bi-plus-lg"></i> Tambah Gambar Baru
                        </a>

                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        <div class="row g-3">
                            @forelse ($galeries as $galery)
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    {{-- Memanggil komponen card untuk setiap gambar --}}
                                    <x-galery-card :galery="$galery" />
                                </div>
                            @empty
                                <div class="col-12">
                                    <div class="alert alert-info text-center">
                                        Belum ada data gambar di galeri.
                                    </div>
                                </div>
                            @endforelse
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
