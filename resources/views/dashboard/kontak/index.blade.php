@extends('dashboard.layouts.main')

@section('title', 'Manajemen Pesan Kontak')

@section('content')
    <div class="pagetitle">
        <h1>Pesan Masuk</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">Pesan Kontak</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Data Pesan Masuk</h5>
                        
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        <div class="table-responsive">
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Subjek</th>
                                        <th scope="col">Pesan</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($kontaks as $kontak)
                                        {{-- Komponen ini akan menampilkan satu baris data --}}
                                        <x-kontak-row :kontak="$kontak" :loop="$loop" />
                                    @empty
                                        <tr>
                                            <td colspan="6" class="text-center">Belum ada pesan masuk.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

