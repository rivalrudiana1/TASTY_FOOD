<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Galery;
use Illuminate\Http\Request;

class TrashController extends Controller
{
    // Menampilkan semua data di sampah
    public function index()
    {
        $beritas = Berita::onlyTrashed()->get();
        $galeries = Galery::onlyTrashed()->get();

        return view('dashboard.trash.index', compact('beritas', 'galeries'));
    }

    // Pulihkan data
    public function restore($type, $id)
    {
        if ($type === 'berita') {
            Berita::onlyTrashed()->where('id', $id)->restore();
        } elseif ($type === 'galery') {
            Galery::onlyTrashed()->where('id', $id)->restore();
        }

        return redirect()->route('dashboard.trash.index')->with('success', 'Data berhasil dipulihkan');
    }

    // Hapus permanen
    public function forceDelete($type, $id)
    {
        if ($type === 'berita') {
            Berita::onlyTrashed()->where('id', $id)->forceDelete();
        } elseif ($type === 'galery') {
            Galery::onlyTrashed()->where('id', $id)->forceDelete();
        }

        return redirect()->route('dashboard.trash.index')->with('success', 'Data berhasil dihapus permanen');
    }
}
