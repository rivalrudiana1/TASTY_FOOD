<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Galery;
use App\Models\Kontak;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // 1. Menghitung jumlah data dari setiap model
        $beritaCount = Berita::count();
        $galeryCount = Galery::count();
        $kontakCount = Kontak::count();

        // 2. Menghitung jumlah data di sampah (Recycle Bin)
        $trashCount = Berita::onlyTrashed()->count() + Galery::onlyTrashed()->count();

        // 3. Mengirimkan hasil hitungan ke view menggunakan compact()
        return view('dashboard.index', compact(
            'beritaCount',
            'galeryCount',
            'kontakCount',
            'trashCount'
        ));
    }
}
