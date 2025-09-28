@extends('dashboard.layouts.main')

@section('title', 'Edit Berita')

@section('content')
<div class="pagetitle">
    <h1>Edit Berita</h1>
</div>

<section class="section">
    <div class="card">
        <div class="card-body">
            <form action="{{ route('dashboard.berita.update', $berita->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="title" class="form-label">Judul</label>
                    <input type="text" class="form-control" id="title" name="title"
                           value="{{ old('title', $berita->title) }}" required>
                </div>

                <div class="mb-3">
                    <label for="content" class="form-label">Konten</label>
                    <textarea class="form-control" id="content" name="content" rows="5" required>{{ old('content', $berita->content) }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Gambar</label><br>
                    <img src="{{ asset('storage/' . $berita->image) }}" width="150" class="mb-2 rounded">
                    <input type="file" class="form-control" id="image" name="image">
                </div>

                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            </form>
        </div>
    </div>
</section>
@endsection
