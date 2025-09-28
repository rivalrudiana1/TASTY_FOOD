@props(['berita', 'loop'])

<script>
function confirmDelete(id) {
    Swal.fire({
        title: 'Apakah Anda yakin?',
        text: "Data berita akan dihapus permanen!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'Ya, hapus!',
        cancelButtonText: 'Batal'
    }).then((result) => {
        if (result.isConfirmed) {
            document.getElementById('delete-form-' + id).submit();
        }
    })
}
</script>

<tr>
    <th scope="row">{{ $loop->iteration }}</th>
    <td>
        <img src="{{ asset('storage/' . $berita->image) }}" width="100" class="rounded" alt="{{ $berita->title }}">
    </td>
    <td>{{ $berita->title }}</td>
    <td>{{ Str::limit($berita->content, 100) }}</td>
    <td>
        {{-- Tombol Edit --}}
        <a href="{{ route('dashboard.berita.edit', $berita->id) }}" class="btn btn-warning btn-sm">
            <i class="bi bi-pencil"></i>
        </a>

        {{-- Tombol Hapus --}}
        <form id="delete-form-{{ $berita->id }}" action="{{ route('dashboard.berita.destroy', $berita->id) }}" method="POST" class="d-inline">
            @csrf
            @method('DELETE')
            <button type="button" class="btn btn-danger btn-sm" onclick="confirmDelete({{ $berita->id }})">
                <i class="bi bi-trash"></i>
            </button>
        </form>
    </td>
</tr>
