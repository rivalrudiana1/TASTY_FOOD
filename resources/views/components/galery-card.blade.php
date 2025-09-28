@props(['galery'])

<div class="card h-100 shadow-sm">
    <img src="{{ asset('storage/' . $galery->image) }}" class="card-img-top" alt="Galeri Image" style="height: 200px; object-fit: cover;">
    <div class="card-body text-center d-flex flex-column justify-content-center">
        <p class="card-text small text-muted mb-2">{{ $galery->created_at->format('d M Y') }}</p>
        <form action="{{ url('/dashboard/galery/' . $galery->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus gambar ini?')">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger btn-sm">
                <i class="bi bi-trash"></i> Hapus
            </button>
        </form>
    </div>
</div>
