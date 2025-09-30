<?php

namespace App\Http\Controllers;

use App\Models\Tentang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TentangController extends Controller
{
    /**
     * Frontend view (public).
     */
    public function indexPublic()
    {
        $tentang = Tentang::first(); // ambil 1 data tentang (atau sesuaikan kebutuhan)
        return view('tentang', compact('tentang'));
    }

    /**
     * Backend: tampilkan semua data.
     */
    public function index()
    {
        $tentang = Tentang::all();
        return view('dashboard.tentang.index', compact('tentang'));
    }

    public function create()
    {
        return view('dashboard.tentang.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required',
            'gambar_deskripsi_kiri' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:102040',
            'gambar_deskripsi_kanan' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:102040',
            'visi' => 'required',
            'gambar_visi_kiri' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:102040',
            'gambar_visi_kanan' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:102040',
            'misi' => 'required',
            'gambar_misi' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:102040',
        ]);

        $data = $request->all();

        // Handle gambar deskripsi kiri dan kanan
        if ($request->hasFile('gambar_deskripsi_kiri')) {
            $data['gambar_deskripsi_kiri'] = $request->file('gambar_deskripsi_kiri')->store('tentang', 'public');
        }
        if ($request->hasFile('gambar_deskripsi_kanan')) {
            $data['gambar_deskripsi_kanan'] = $request->file('gambar_deskripsi_kanan')->store('tentang', 'public');
        }

        // Handle gambar visi kiri dan kanan
        if ($request->hasFile('gambar_visi_kiri')) {
            $data['gambar_visi_kiri'] = $request->file('gambar_visi_kiri')->store('tentang', 'public');
        }
        if ($request->hasFile('gambar_visi_kanan')) {
            $data['gambar_visi_kanan'] = $request->file('gambar_visi_kanan')->store('tentang', 'public');
        }

        // Handle gambar misi
        if ($request->hasFile('gambar_misi')) {
            $data['gambar_misi'] = $request->file('gambar_misi')->store('tentang', 'public');
        }

        Tentang::create($data);

        return redirect()->route('dashboard.tentang.index')->with('success', 'Data Tentang berhasil ditambahkan.');
    }

    public function edit(Tentang $tentang)
    {
        return view('dashboard.tentang.edit', compact('tentang'));
    }

    public function update(Request $request, Tentang $tentang)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required',
            'gambar_deskripsi_kiri' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:102040',
            'gambar_deskripsi_kanan' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:102040',
            'visi' => 'required',
            'gambar_visi_kiri' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:102040',
            'gambar_visi_kanan' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:102040',
            'misi' => 'required',
            'gambar_misi' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:102040',
        ]);

        $data = $request->all();

        // Handle gambar deskripsi kiri dan kanan
        if ($request->hasFile('gambar_deskripsi_kiri')) {
            // Hapus gambar lama jika ada
            if ($tentang->gambar_deskripsi_kiri) {
                Storage::disk('public')->delete($tentang->gambar_deskripsi_kiri);
            }
            $data['gambar_deskripsi_kiri'] = $request->file('gambar_deskripsi_kiri')->store('tentang', 'public');
        }
        if ($request->hasFile('gambar_deskripsi_kanan')) {
            if ($tentang->gambar_deskripsi_kanan) {
                Storage::disk('public')->delete($tentang->gambar_deskripsi_kanan);
            }
            $data['gambar_deskripsi_kanan'] = $request->file('gambar_deskripsi_kanan')->store('tentang', 'public');
        }

        // Handle gambar visi kiri dan kanan
        if ($request->hasFile('gambar_visi_kiri')) {
            if ($tentang->gambar_visi_kiri) {
                Storage::disk('public')->delete($tentang->gambar_visi_kiri);
            }
            $data['gambar_visi_kiri'] = $request->file('gambar_visi_kiri')->store('tentang', 'public');
        }
        if ($request->hasFile('gambar_visi_kanan')) {
            if ($tentang->gambar_visi_kanan) {
                Storage::disk('public')->delete($tentang->gambar_visi_kanan);
            }
            $data['gambar_visi_kanan'] = $request->file('gambar_visi_kanan')->store('tentang', 'public');
        }

        // Handle gambar misi
        if ($request->hasFile('gambar_misi')) {
            if ($tentang->gambar_misi) {
                Storage::disk('public')->delete($tentang->gambar_misi);
            }
            $data['gambar_misi'] = $request->file('gambar_misi')->store('tentang', 'public');
        }

        $tentang->update($data);

        return redirect()->route('dashboard.tentang.index')->with('success', 'Data Tentang berhasil diperbarui.');
    }

    public function destroy(Tentang $tentang)
    {
        $tentang->delete();
        return redirect()->route('dashboard.tentang.index')->with('success', 'Data Tentang berhasil dihapus.');
    }
}
