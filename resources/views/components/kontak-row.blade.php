@props(['kontak', 'loop'])

<tr>
    <td>{{ $loop->iteration }}</td>
    <td>{{ $kontak->name }}</td>
    <td>{{ $kontak->email }}</td>
    <td>{{ $kontak->subject }}</td>
    <td>{{ Str::limit($kontak->message, 100) }}</td>
    <td>{{ $kontak->created_at->format('d M Y') }}</td>
    <td>
        <form action="{{ url('/dashboard/kontak/' . $kontak->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus pesan ini?')">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger btn-sm">
                <i class="bi bi-trash"></i>
            </button>
        </form>
    </td>
</tr>
