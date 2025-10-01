<?php

namespace App\Http\Controllers;

use App\Models\Info;
use Illuminate\Http\Request;

class InfoController extends Controller
{
    public function index()
    {
        // Ambil data pertama (hanya 1 data di tabel)
        $info = Info::first();
        return view('dashboard.info.index', compact('info'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'email' => 'nullable|email',
            'telepon' => 'nullable|string|max:20',
            'alamat' => 'nullable|string',
        ]);

        Info::create($validated);

        return redirect()->route('dashboard.info.index')->with('success', 'Informasi berhasil disimpan.');
    }

    public function update(Request $request, Info $info)
    {
        $validated = $request->validate([
            'email' => 'nullable|email',
            'telepon' => 'nullable|string|max:20',
            'alamat' => 'nullable|string',
        ]);

        $info->update($validated);

        return redirect()->route('dashboard.info.index')->with('success', 'Informasi berhasil diperbarui.');
    }
}
