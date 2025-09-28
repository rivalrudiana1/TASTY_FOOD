@extends('dashboard.layouts.main')

@section('title', 'Manajemen Berita')

@section('content')
<div class="pagetitle">
    <h1>Manajemen Berita</h1>
</div>

<section class="section">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Data Berita</h5>
            <a href="{{ route('dashboard.berita.create') }}" class="btn btn-primary mb-3">Tambah Berita</a>

            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Gambar</th>
                        <th>Judul</th>
                        <th>Konten</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($beritas as $berita)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td><img src="{{ asset('storage/' . $berita->image) }}" width="100"></td>
                        <td>{{ $berita->title }}</td>
                        <td>{{ Str::limit($berita->content, 50) }}</td>
                        <td>
                            <a href="{{ route('dashboard.berita.edit', $berita->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('dashboard.berita.destroy', $berita->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin hapus?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm" type="submit">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection
