<?php

namespace App\Http\Controllers;

use App\Models\Galery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GaleryController extends Controller
{
    // --- METHOD UNTUK PENGUNJUNG (FRONTEND) ---

    public function indexPublic()
    {
        // Mengambil semua data galeri, diurutkan dari yang terbaru
        $galeries = Galery::latest()->get();

        // Mengirim data ke view 'galeri'
        return view('galery', compact('galeries'));
    }

    // --- METHOD UNTUK ADMIN (BACKEND / CRUD) ---

    public function index()
    {
        $galeries = Galery::latest()->get();
        return view('dashboard.galery.index', compact('galeries'));
    }

    public function create()
    {
        return view('dashboard.galery.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:10240',
        ]);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('galery-images', 'public');
            $validatedData['image'] = $path;
        }

        Galery::create($validatedData);
        return redirect()->route('dashboard.galery.index')->with('success', 'Gambar baru berhasil ditambahkan.');
    }

    public function destroy(Galery $galery)
    {
        // Jangan hapus file di sini
        $galery->delete();

        return redirect()->route('dashboard.galery.index')
            ->with('success', 'Gambar masuk ke sampah.');
    }
}
