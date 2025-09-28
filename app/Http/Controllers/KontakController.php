<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

class KontakController extends Controller
{
    // --- METODE UNTUK FRONTEND ---

    /**
     * Menampilkan halaman form kontak untuk pengunjung.
     */
    public function create()
    {
        return view('kontak');
    }

    /**
     * Menyimpan pesan baru dari pengunjung.
     */
    public function store(Request $request)
    {
        // 1. Log awal request
        Log::info('=== Memulai proses kontak form ===');
        Log::info('Request data:', $request->all());

        // 2. Validasi input
        try {
            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'subject' => 'required|string|max:255',
                'message' => 'required|string',
            ], [
                'name.required' => 'Nama harus diisi.',
                'email.required' => 'Email harus diisi.',
                'email.email' => 'Format email tidak valid.',
                'subject.required' => 'Subjek harus diisi.',
                'message.required' => 'Pesan harus diisi.',
            ]);
            
            Log::info('Validasi berhasil:', $validatedData);
        } catch (\Illuminate\Validation\ValidationException $e) {
            Log::error('Validasi gagal:', ['errors' => $e->errors()]);
            throw $e;
        }

        try {
            // 3. Cek koneksi database
            try {
                $connection = DB::connection();
                $connection->getPdo();
                Log::info('Koneksi database berhasil');
                
                // Log database dan table yang digunakan
                Log::info('Database info:', [
                    'name' => $connection->getDatabaseName(),
                    'table' => (new Kontak)->getTable()
                ]);
            } catch (\Exception $e) {
                Log::error('Koneksi database gagal: ' . $e->getMessage());
                throw new Exception('Tidak dapat terhubung ke database: ' . $e->getMessage());
            }

            // 4. Coba untuk membuat dan menyimpan data
            try {
                $kontak = new Kontak($validatedData);
                $saved = $kontak->save();
                
                if (!$saved) {
                    Log::error('Gagal menyimpan kontak ke database');
                    throw new Exception('Gagal menyimpan data ke database.');
                }
                
                Log::info('Kontak berhasil disimpan:', ['id' => $kontak->id, 'data' => $kontak->toArray()]);

                // 5. Return response sesuai request type
                if ($request->expectsJson()) {
                    return response()->json([
                        'success' => true,
                        'message' => 'Pesan berhasil dikirim!',
                        'data' => $kontak
                    ]);
                }
                
                return back()->with('success', 'Pesan Anda telah terkirim! Terima kasih.');

            } catch (Exception $e) {
                Log::error('Error final:', [
                    'message' => $e->getMessage(),
                    'trace' => $e->getTraceAsString()
                ]);

                if ($request->expectsJson()) {
                    return response()->json([
                        'success' => false,
                        'message' => 'Gagal mengirim pesan: ' . $e->getMessage()
                    ], 500);
                }

                return back()
                    ->withInput()
                    ->with('error', 'Maaf, terjadi kesalahan: ' . $e->getMessage());
            }
        } catch (Exception $e) {
            Log::error('Error saat memproses kontak: ' . $e->getMessage());
            return back()->with('error', 'Terjadi kesalahan sistem.');
        }
    }

    // --- METODE UNTUK DASHBOARD (BACKEND) ---

    /**
     * Menampilkan daftar pesan masuk di dashboard.
     */
    public function index()
    {
        $kontaks = Kontak::latest()->paginate(10);
        return view('dashboard.kontak.index', compact('kontaks'));
    }

    /**
     * Menampilkan detail satu pesan di dashboard.
     */
    public function show(Kontak $kontak)
    {
        // Diarahkan ke halaman edit karena 'show' biasanya tidak diperlukan untuk pesan kontak
        return redirect()->route('dashboard.kontak.edit', $kontak->id);
    }

    /**
     * Menampilkan form untuk mengedit pesan.
     */
    public function edit(Kontak $kontak)
    {
        return view('dashboard.kontak.edit', compact('kontak'));
    }

    /**
     * Memperbarui pesan di database.
     */
    public function update(Request $request, Kontak $kontak)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|max:255',
            'message' => 'required',
        ]);

        $kontak->update($validatedData);
        return redirect()->route('dashboard.kontak.index')->with('success', 'Pesan berhasil diperbarui.');
    }

    /**
     * Menghapus pesan dari database.
     */
    public function destroy(Kontak $kontak)
    {
        $kontak->delete();
        return redirect()->route('dashboard.kontak.index')->with('success', 'Pesan berhasil dihapus.');
    }
}

