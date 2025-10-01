@extends('dashboard.layouts.main')

@section('content')
    <div class="container">
        <h1>Menu Sampah</h1>

        <h3>Berita</h3>
        <table class="table">
            <thead>
                <tr>
                    <th>Gambar</th>
                    <th>Judul</th>
                    <th>Tanggal Dihapus</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($beritas as $berita)
                    <tr>
                        <td>
                            @if ($berita->image)
                                <img src="{{ asset('storage/berita/' . $berita->image) }}" alt="{{ $berita->title }}"
                                    class="img-thumbnail" style="max-width: 100px;">
                            @else
                                <span class="text-muted">No image</span>
                            @endif
                        </td>
                        <td>{{ $berita->title }}</td>
                        <td>{{ $berita->deleted_at->format('d M Y H:i') }}</td>
                        <td>
                            <form action="{{ route('dashboard.trash.restore', ['type' => 'berita', 'id' => $berita->id]) }}"
                                method="POST" style="display:inline-block;">
                                @csrf
                                @method('PUT')
                                <button type="submit" class="btn btn-success btn-sm">
                                    <i class="bi bi-arrow-counterclockwise"></i> Pulihkan
                                </button>
                            </form>
                            <form
                                action="{{ route('dashboard.trash.forceDelete', ['type' => 'berita', 'id' => $berita->id]) }}"
                                method="POST" style="display:inline-block;"
                                onsubmit="return confirm('Apakah Anda yakin ingin menghapus permanen item ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">
                                    <i class="bi bi-trash3"></i> Hapus Permanen
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center">Tidak ada berita di sampah</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <h3>Galeri</h3>
        <table class="table">
            <thead>
                <tr>
                    <th>Gambar</th>
                    <th>Caption</th>
                    <th>Tanggal Dihapus</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($galeries as $galery)
                    <tr>
                        <td>
                            <img src="{{ asset('storage/' . $galery->image) }}" alt="Gallery Image" class="img-thumbnail"
                                style="max-width: 100px;">
                        </td>
                        <td>{{ $galery->caption ?? 'No caption' }}</td>
                        <td>{{ $galery->deleted_at->format('d M Y H:i') }}</td>
                        <td>
                            <form action="{{ route('dashboard.trash.restore', ['type' => 'galery', 'id' => $galery->id]) }}"
                                method="POST" style="display:inline-block;">
                                @csrf
                                @method('PUT') <!-- Tambahkan ini -->
                                <button type="submit" class="btn btn-success btn-sm">
                                    <i class="bi bi-arrow-counterclockwise"></i> Pulihkan
                                </button>
                            </form>

                            <form
                                action="{{ route('dashboard.trash.forceDelete', ['type' => 'galery', 'id' => $galery->id]) }}"
                                method="POST" style="display:inline-block;"
                                onsubmit="return confirm('Apakah Anda yakin ingin menghapus permanen item ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">
                                    <i class="bi bi-trash3"></i> Hapus Permanen
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center">Tidak ada galeri di sampah</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
