@extends('dashboard.layouts.main')

@section('title', 'Tambah Gambar Baru')

@section('content')
    <div class="pagetitle">
        <h1>Tambah Gambar Baru</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ url('/dashboard/galery') }}">Galeri</a></li>
                <li class="breadcrumb-item active">Tambah Baru</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Form Tambah Gambar</h5>

                        <form action="{{ url('/dashboard/galery') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-3">
                                <label for="image" class="form-label">Upload Gambar</label>
                                <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" required>
                                <small class="form-text text-muted">Format yang didukung: JPG, JPEG, PNG. Ukuran maksimal: 10MB.</small>
                                @error('image')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="text-end">
                                <a href="{{ url('/dashboard/galery') }}" class="btn btn-secondary">Batal</a>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                        <!-- End Form -->
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
