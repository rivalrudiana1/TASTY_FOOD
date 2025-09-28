<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard') - Tasty Food</title>

    <!-- Bootstrap CSS from CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons from CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f4f6f9;
        }
        .sidebar {
            width: 260px;
            min-height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #0d1b2a; /* Warna biru gelap */
            padding-top: 15px;
            transition: left 0.3s ease;
        }
        .main-content {
            margin-left: 260px;
            padding: 20px;
            width: calc(100% - 260px);
            transition: all 0.3s ease;
        }
        .sidebar .nav-link {
            color: rgba(255, 255, 255, 0.7);
            font-size: 0.95rem;
            padding: 12px 20px;
            border-radius: 5px;
            margin: 0 10px 5px 10px;
            display: flex;
            align-items: center;
        }
        .sidebar .nav-link:hover,
        .sidebar .nav-link.active {
            color: #ffffff;
            background-color: #1b263b; /* Warna biru sedikit lebih terang */
        }
        .sidebar .nav-link i {
            margin-right: 12px;
            font-size: 1.1rem;
        }
        .sidebar .sidebar-header {
            padding: 0 15px 15px 15px;
            border-bottom: 1px solid #495057;
            margin-bottom: 15px;
        }
        .sidebar .sidebar-header a {
            font-size: 1.5rem;
            font-weight: bold;
            color: #ffffff;
            text-decoration: none;
        }
        .header-bar {
            background-color: #fff;
            padding: 10px 30px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }
        .sidebar-toggle {
            display: none; /* Sembunyikan di desktop */
        }
        
        /* Responsive Styles */
        @media (max-width: 992px) {
            .sidebar {
                left: -260px; /* Sembunyikan sidebar di layar kecil */
            }
            .sidebar.active {
                left: 0; /* Tampilkan sidebar jika aktif */
            }
            .main-content {
                margin-left: 0;
                width: 100%;
            }
            .sidebar-toggle {
                display: block; /* Tampilkan tombol toggle */
                font-size: 1.5rem;
            }
        }
    </style>
</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar text-white" id="sidebar">
        <div class="sidebar-header">
            <a href="{{ url('/dashboard') }}">TASTY FOOD</a>
        </div>

        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ request()->is('dashboard') ? 'active' : '' }}" href="{{ url('/dashboard') }}">
                    <i class="bi bi-grid-fill"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('dashboard/berita*') ? 'active' : '' }}" href="{{ url('/dashboard/berita') }}">
                    <i class="bi bi-newspaper"></i>
                    <span>Berita</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('dashboard/galery*') ? 'active' : '' }}" href="{{ url('/dashboard/galery') }}">
                    <i class="bi bi-images"></i>
                    <span>Galeri</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('dashboard/kontak*') ? 'active' : '' }}" href="{{ url('/dashboard/kontak') }}">
                    <i class="bi bi-envelope-fill"></i>
                    <span>Kontak</span>
                </a>
            </li>
        </ul>
    </div>
    <!-- End Sidebar -->

    <!-- Main Content -->
    <div class="main-content">
        <header class="header-bar d-flex justify-content-between align-items-center mb-4">
            <!-- Tombol Toggle untuk Mobile -->
            <button class="btn sidebar-toggle" id="sidebarToggle">
                <i class="bi bi-list"></i>
            </button>
            
            <!-- User Dropdown -->
             <div class="dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-person-circle me-1"></i>
                    @auth
                        <span>{{ auth()->user()->name }}</span>
                    @endauth
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                        <form action="{{ url('/logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="dropdown-item">
                                <i class="bi bi-box-arrow-right"></i>
                                Logout
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
        </header>

        <main>
            @yield('content')
        </main>
    </div>
    <!-- End Main Content -->

    <!-- Bootstrap JS from CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.getElementById('sidebarToggle').addEventListener('click', function() {
            document.getElementById('sidebar').classList.toggle('active');
        });
    </script>
</body>
</html>

