# Tasty Food Portal

## 1. Tajuk Projek & Ringkasan
**Tasty Food (Web Company Profile & Portal CMS)**
Sistem Pengurusan Kandungan (CMS) dan profil syarikat untuk "Tasty Food", memfokuskan kepada promosi jenama dan interaksi pengunjung. Platform ini menyajikan antaramuka web untuk orang awam menyemak berita, galeri, dan profil syarikat; disokong sepenuhnya oleh panel pentadbir (Dashboard) teguh yang membolehkan manipulasi data menyeluruh.

## 2. Teknologi yang Digunakan (Tech Stack)
- **Frontend**: Enjin Templat Laravel Blade
- **Backend**: PHP 8.1+, Laravel Framework v10
- **Pengurusan Pangkalan Data**: MySQL/SQLite, berserta Eloquent ORM.

## 3. Ciri-Ciri Utama & Logik Perniagaan
- **Antaramuka Pelawat Awam (Frontend)**: Terdapat pautan navigasi utama ke Halaman Beranda (Home), Maklumat Korporat (Tentang), Liputan Media (Berita), Galeri Foto (Galery), dan Halaman Berhubung (Kontak).
- **Papan Pemuka Pentadbir (Admin Dashboard)**: Meliputi sistem operasi CRUD bersepadu yang mengawal elemen portal: Berita, Tentang, Galeri, dan Kontak.
- **Konfigurasi Info Global**: Tetapan maklumat lazim organisasi diuruskan secara eksklusif menggunakan `/info` di papan pemuka, menjadikan perubahan nama atau alamat sangat dinamik.
- **Modul Pemulihan "Tong Sampah" (Soft Deletes / Recycle Bin)**: Logik pengaturcaraan sofistikated (`TrashController`) memastikan bahawa rekod yang dipadamkan boleh ditinjau semula, dipulihkan (*Restore*), atau dihapuskan sepenuhnya secara kekal (*Force Delete*).

## 4. Struktur Direktori Projek
- `app/Http/Controllers/`: Mengandungi puluhan kawalan berasingan bagi menguruskan model data yang berbeza (`BeritaController`, `TrashController`, `InfoController`, dll).
- `routes/web.php`: Tetapan laluan web yang diasingkan secara kemas ke segmen: **Pengunjung Awam**, **Otentikasi**, dan kumpulan perutean **Admin Dashboard**.
- `database/`: Mengawal fail migrasi (Migration) dan pengisi pangkalan data (Seeders).
- `resources/views/`: Menghimpunkan fail HTML campuran Blade, fail ini dipecah lagi pada susunan awam dan subdirektori pengurusan CMS di dalam papan pemuka.

## 5. Panduan Pemasangan & Cara Menjalankan Projek
Langkah-langkah untuk persediaan di persekitaran tempatan (*localhost*):

1. **Jalankan Pemasangan Pakej Asas**:
   ```bash
   composer install
   npm install
   ```
2. **Tetapan Pangkalan Data**:
   Wujudkan fail environment:
   ```bash
   cp .env.example .env
   ```
   Pastikan sambungan ke server pangkalan data pada kekunci `DB_...` adalah benar dan aktif.
3. **Penyediaan Kunci Projek & Migrasi Data**:
   ```bash
   php artisan key:generate
   php artisan migrate
   ```
4. **Laksanakan Servis**:
   Buka terminal pengoperasian:
   ```bash
   npm run dev
   php artisan serve
   ```

## 6. Endpoint API / Skema Pangkalan Data
Laluan rute logik yang tersenarai secara terperinci (Web Routes):
- **Pelawat Harian**:
  - `GET /`, `/tentang`, `/galery`
  - `GET /berita`, `/berita/{berita}`
  - `GET /kontak`, `POST /kontak`
- **Dashboard Pentadbir (Mendapat perlindungan Modul 'Auth')**:
  - `GET /dashboard` : Analisis utama.
  - `Resource /dashboard/berita`, `tentang`, `galery`, `kontak` : Pengurusan Kandungan Laman.
  - `Route /dashboard/info` : Menangani penyelarasan Maklumat Am (Get, Post, Edit, Put).
  - `Route /dashboard/trash` : Mengendalikan rekod sistem yang dihapuskan secara sementara (`/restore/{type}/{id}`, `/delete/{type}/{id}`).
