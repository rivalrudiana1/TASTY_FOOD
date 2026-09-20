# Tasty Food Portal

## 1. Judul Proyek & Ringkasan
**Tasty Food (Web Company Profile & Portal CMS)**
Sistem Content Management System (CMS) dan profil perusahaan untuk "Tasty Food", berfokus pada promosi merek dan interaksi pengunjung. Platform ini menyajikan antarmuka web bagi masyarakat umum untuk melihat berita, galeri, dan profil perusahaan; didukung penuh oleh panel admin (Dashboard) yang kuat untuk manipulasi data secara menyeluruh.

## 2. Teknologi yang Digunakan (Tech Stack)
- **Frontend**: Laravel Blade Template Engine
- **Backend**: PHP 8.1+, Laravel Framework v10
- **Database**: MySQL/SQLite, beserta Eloquent ORM.

## 3. Fitur Utama & Logika Bisnis
- **Antarmuka Pengunjung Publik (Frontend)**: Terdapat navigasi utama ke Halaman Beranda (Home), Informasi Korporat (Tentang), Liputan Media (Berita), Galeri Foto (Galery), dan Halaman Hubungi Kami (Kontak).
- **Dashboard Admin**: Meliputi sistem operasi CRUD terpadu yang mengontrol elemen portal: Berita, Tentang, Galeri, dan Kontak.
- **Konfigurasi Info Global**: Pengaturan informasi umum organisasi dikelola secara eksklusif menggunakan `/info` di dashboard, menjadikan perubahan nama atau alamat sangat dinamis.
- **Modul *Recycle Bin* (*Soft Deletes*)**: Logika pemrograman terstruktur (`TrashController`) memastikan bahwa *record* yang dihapus dapat ditinjau kembali, dipulihkan (*Restore*), atau dihapus secara permanen (*Force Delete*).

## 4. Struktur Direktori Proyek
- `app/Http/Controllers/`: Berisi puluhan *controller* terpisah untuk mengelola model data yang berbeda (`BeritaController`, `TrashController`, `InfoController`, dll).
- `routes/web.php`: Pengaturan *routes* web yang dipisahkan secara rapi ke segmen: **Pengunjung Publik**, **Authentication**, dan grup *routes* **Dashboard Admin**.
- `database/`: Mengelola file migration dan pengisi database (seeder).
- `resources/views/`: Mengumpulkan file HTML campuran Blade, yang dibagi lagi ke dalam tata letak publik dan subdirektori manajemen CMS di dalam dashboard.

## 5. Panduan Instalasi & Cara Menjalankan Proyek
Langkah-langkah untuk persiapan di lingkungan lokal (*localhost*):

1. **Jalankan Instalasi *Package* Dasar**:
   ```bash
   composer install
   npm install
   ```
2. **Konfigurasi Database**:
   Buat file *environment*:
   ```bash
   cp .env.example .env
   ```
   Pastikan koneksi ke server database pada variabel `DB_...` valid dan aktif.
3. **Persiapan Security Key & Migration Data**:
   ```bash
   php artisan key:generate
   php artisan migrate
   ```
4. **Jalankan Server**:
   Buka terminal eksekusi:
   ```bash
   npm run dev
   php artisan serve
   ```

## 6. Endpoint API / Skema Database
Daftar *routes* logika yang tersedia secara rinci (Web Routes):
- **Pengunjung Harian**:
  - `GET /`, `/tentang`, `/galery`
  - `GET /berita`, `/berita/{berita}`
  - `GET /kontak`, `POST /kontak`
- **Dashboard Admin (Mendapatkan perlindungan Middleware 'Auth')**:
  - `GET /dashboard` : Analisis utama.
  - `Resource /dashboard/berita`, `tentang`, `galery`, `kontak` : Manajemen Konten Situs.
  - `Route /dashboard/info` : Menangani penyelarasan Informasi Umum (Get, Post, Edit, Put).
  - `Route /dashboard/trash` : Mengelola *record* sistem yang dihapus sementara (`/restore/{type}/{id}`, `/delete/{type}/{id}`).
