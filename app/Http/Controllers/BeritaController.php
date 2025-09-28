<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BeritaController extends Controller
{
    /**
     * Tampilkan daftar berita di dashboard.
     */
    public function index()
    {
        $beritas = Berita::latest()->get();
        return view('dashboard.berita.index', compact('beritas'));
    }

    /**
     * Form tambah berita.
     */
    public function create()
    {
        return view('dashboard.berita.create');
    }

    /**
     * Simpan berita baru.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'   => 'required|string|max:255',
            'content' => 'required|string',
            'image'   => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Simpan gambar ke storage
        $path = $request->file('image')->store('berita', 'public');

        // Simpan data
        Berita::create([
            'title'   => $validated['title'],
            'content' => $validated['content'],
            'image'   => $path,
        ]);

        return redirect()->route('dashboard.berita.index')->with('success', 'Berita berhasil ditambahkan.');
    }

    /**
     * Form edit berita.
     */
    public function edit(Berita $berita)
    {
        return view('dashboard.berita.edit', compact('berita'));
    }

    /**
     * Update berita.
     */
    public function update(Request $request, Berita $berita)
    {
        $validated = $request->validate([
            'title'   => 'required|string|max:255',
            'content' => 'required|string',
            'image'   => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Kalau ada gambar baru → hapus gambar lama
        if ($request->hasFile('image')) {
            if ($berita->image && Storage::disk('public')->exists($berita->image)) {
                Storage::disk('public')->delete($berita->image);
            }
            $validated['image'] = $request->file('image')->store('berita', 'public');
        }

        $berita->update($validated);

        return redirect()->route('dashboard.berita.index')->with('success', 'Berita berhasil diperbarui.');
    }

    /**
     * Hapus berita.
     */
    public function destroy(Berita $berita)
    {
        // Hapus gambar kalau ada
        if ($berita->image && Storage::disk('public')->exists($berita->image)) {
            Storage::disk('public')->delete($berita->image);
        }

        // Hapus record
        $berita->delete();

        return redirect()->route('dashboard.berita.index')->with('success', 'Berita berhasil dihapus.');
    }

    /*
    |--------------------------------------------------------------------------
    | Bagian untuk halaman public
    |--------------------------------------------------------------------------
    */
    public function indexPublic()
    {
        $beritas = Berita::latest()->paginate(6);
        return view('berita', compact('beritas'));
    }

    public function showPublic(Berita $berita)
    {
        return view('frontend.berita.show', compact('berita'));
    }
}
