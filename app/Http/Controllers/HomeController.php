<?php

namespace App\Http\Controllers;

// PENTING: Pastikan Model Berita dan Galery sudah di-import di sini.
use App\Models\Berita;
use App\Models\Galery;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Menampilkan halaman utama dengan data dinamis.
     */
    public function index()
    {
        // Mengambil 5 berita terbaru untuk ditampilkan
        // (1 untuk berita utama, 4 untuk berita lainnya)
        $beritas = Berita::latest()->take(5)->get();

        // Mengambil 6 gambar galeri terbaru
        $galeries = Galery::latest()->take(6)->get();

        // Mengirim kedua data tersebut ke view 'home'
        return view('home', compact('beritas', 'galeries'));
    }
}

