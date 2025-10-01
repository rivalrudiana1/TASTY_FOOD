@extends('dashboard.layouts.main')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Data Sampah</h1>
</div>

@if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif  

<div class="row">
    <!-- Berita -->
    <div class="col-md-12 mb-4">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Berita Terhapus</h5>
            </div>
            <div class="card-body">
                @if($trashedData['berita']->isEmpty())
                    <p class="text-muted">Tidak ada data berita yang terhapus.</p>
                @else
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Judul</th>
                                    <th>Tanggal Hapus</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($trashedData['berita'] as $item)
                                    <tr>
                                        <td>{{ $item->title }}</td>
                                        <td>{{ $item->deleted_at->format('d M Y H:i') }}</td>
                                        <td>
                                            <form action="{{ route('dashboard.trash.restore', ['type' => 'berita', 'id' => $item->id]) }}" 
                                                  method="POST" class="d-inline">
                                                @csrf
                                                <button type="submit" class="btn btn-sm btn-success">
                                                    <i class="bi bi-arrow-counterclockwise"></i> Pulihkan
                                                </button>
                                            </form>
                                            <form action="{{ route('dashboard.trash.force-delete', ['type' => 'berita', 'id' => $item->id]) }}" 
                                                  method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus permanen?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">
                                                    <i class="bi bi-trash3"></i> Hapus Permanen
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif
            </div>
        </div>
    </div>

    <!-- Galeri -->
    <div class="col-md-12 mb-4">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Galeri Terhapus</h5>
            </div>
            <div class="card-body">
                @if($trashedData['galery']->isEmpty())
                    <p class="text-muted">Tidak ada data galeri yang terhapus.</p>
                @else
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Gambar</th>
                                    <th>Tanggal Hapus</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($trashedData['galery'] as $item)
                                    <tr>
                                        <td>
                                            <img src="{{ asset('storage/' . $item->image) }}" 
                                                 alt="Gallery Image" style="height: 50px">
                                        </td>
                                        <td>{{ $item->deleted_at->format('d M Y H:i') }}</td>
                                        <td>
                                            <form action="{{ route('dashboard.trash.restore', ['type' => 'galery', 'id' => $item->id]) }}" 
                                                  method="POST" class="d-inline">
                                                @csrf
                                                <button type="submit" class="btn btn-sm btn-success">
                                                    <i class="bi bi-arrow-counterclockwise"></i> Pulihkan
                                                </button>
                                            </form>
                                            <form action="{{ route('dashboard.trash.force-delete', ['type' => 'galery', 'id' => $item->id]) }}" 
                                                  method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus permanen?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">
                                                    <i class="bi bi-trash3"></i> Hapus Permanen
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif
            </div>
        </div>
    </div>

    <!-- Kontak -->
    <div class="col-md-12 mb-4">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Pesan Kontak Terhapus</h5>
            </div>
            <div class="card-body">
                @if($trashedData['kontak']->isEmpty())
                    <p class="text-muted">Tidak ada pesan kontak yang terhapus.</p>
                @else
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Tanggal Hapus</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($trashedData['kontak'] as $item)
                                    <tr>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->deleted_at->format('d M Y H:i') }}</td>
                                        <td>
                                            <form action="{{ route('dashboard.trash.restore', ['type' => 'kontak', 'id' => $item->id]) }}" 
                                                  method="POST" class="d-inline">
                                                @csrf
                                                <button type="submit" class="btn btn-sm btn-success">
                                                    <i class="bi bi-arrow-counterclockwise"></i> Pulihkan
                                                </button>
                                            </form>
                                            <form action="{{ route('dashboard.trash.force-delete', ['type' => 'kontak', 'id' => $item->id]) }}" 
                                                  method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus permanen?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">
                                                    <i class="bi bi-trash3"></i> Hapus Permanen
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection