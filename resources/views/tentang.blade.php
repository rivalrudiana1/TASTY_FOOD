<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Tentang Kami - Tasty Food</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700;800&family=Poppins:wght@400;500&display=swap" rel="stylesheet">

    <style>
        /*--------------------------------------------------------------
        # General
        --------------------------------------------------------------*/
        body {
            font-family: 'Poppins', sans-serif;
            color: #444444;
        }

        .section {
            padding: 80px 0;
        }
        
        /*--------------------------------------------------------------
        # Navigation (STYLE BARU ANDA)
        --------------------------------------------------------------*/
        .navbar-custom {
            background: rgba(0,0,0,0.9) !important;
            padding: 15px 0;
            transition: all 0.3s ease;
        }
        
        .navbar-brand {
            font-size: 1.8rem;
            font-weight: bold;
            color: white !important;
            font-family: 'Montserrat', sans-serif;
        }
        
        .navbar-nav .nav-link {
            color: white !important;
            margin: 0 15px;
            font-weight: 500;
            text-transform: uppercase;
            font-size: 0.9rem;
        }
        
        .navbar-nav .nav-link:hover,
        .navbar-nav .nav-link.active {
            color: #ffc107 !important;
        }
        
        /*--------------------------------------------------------------
        # Hero Section Halaman "Tentang"
        --------------------------------------------------------------*/
        .hero-section-tentang {
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('https://images.unsplash.com/photo-1504754524776-8f4f37790774?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80') center center;
            background-size: cover;
            min-height: 50vh;
            color: white;
            padding-top: 80px; /* Jarak dari header */
        }

        .hero-section-tentang .breadcrumb a {
            color: #f8f9fa;
            text-decoration: none;
        }

        .hero-section-tentang .breadcrumb .active {
            color: #ffffff;
            font-weight: 600;
        }

        .hero-section-tentang .breadcrumb-item + .breadcrumb-item::before {
            color: #f8f9fa;
        }
        
        /*--------------------------------------------------------------
        # Konten Halaman "Tentang"
        --------------------------------------------------------------*/
        .section-title-left {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 25px;
            text-transform: uppercase;
            font-family: 'Montserrat', sans-serif;
        }

        .intro-tentang p,
        .visi-misi p {
            line-height: 1.8;
            color: #666;
        }

        /*--------------------------------------------------------------
        # Footer (STYLE BARU ANDA)
        --------------------------------------------------------------*/
        .footer {
            background: #1a1a1a;
            color: #ccc;
            padding: 60px 0 30px;
        }
        
        .footer h5 {
            color: #ffc107;
            margin-bottom: 25px;
            font-weight: 700;
            font-family: 'Montserrat', sans-serif;
        }
        
        .footer p, .footer a {
            color: #ccc;
            text-decoration: none;
            line-height: 1.8;
        }
        
        .footer a:hover {
            color: #ffc107;
        }
        
        .footer .footer-links {
            list-style: none;
            padding: 0;
        }
        
        .footer .footer-links li {
            margin-bottom: 10px;
        }
        
        .footer .social-icons a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 45px;
            height: 45px;
            background: #333;
            border-radius: 50%;
            margin-right: 10px;
            color: white;
            transition: all 0.3s ease;
        }
        
        .footer .social-icons a:hover {
            background: #ffc107;
            transform: translateY(-3px);
        }
        
        .footer .copyright {
            text-align: center;
            padding-top: 30px;
            margin-top: 40px;
            border-top: 1px solid #333;
            color: #666;
        }

    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
        <div class="container">
            <a class="navbar-brand" href="/">TASTY FOOD</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/tentang">TENTANG</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/berita">BERITA</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/galery">GALERI</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/kontak">KONTAK</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="main">
        <section class="hero-section-tentang d-flex align-items-center justify-content-center">
            <div class="container text-center" data-aos="fade-up">
                <h1 class="display-3 fw-bold">TENTANG KAMI</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="/">HOME</a></li>
                        <li class="breadcrumb-item active" aria-current="page">TENTANG</li>
                    </ol>
                </nav>
            </div>
        </section>
        <section id="intro-tentang" class="intro-tentang section bg-light">
            <div class="container" data-aos="fade-up">
                <div class="row align-items-center gy-5">
                    <div class="col-lg-6">
                        <h2 class="section-title-left">TASTY FOOD</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu rutrum commodo, dui diam convallis arcu, eget consectetur ex sem eget lacus. Nullam vitae dignissim neque, vel luctus ex. Fusce sit amet viverra ante.</p>
                        <p>Praesent semper, enim quis tincidunt euismod, sem quam convallis elit, at semper sem lacus sed sem. Aliquam erat volutpat. Donec quam nunc, pulvinar et dignissim non, malesuada vel turpis. Nullam vitae dignissim neque, vel luctus ex. Fusce sit amet viverra ante.</p>
                    </div>
                    <div class="col-lg-6">
                        <div class="row g-4">
                            <div class="col-12" data-aos="fade-up" data-aos-delay="200">
                                <img src="https://images.unsplash.com/photo-1512621776951-a57141f2eefd?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" class="img-fluid rounded-3 shadow-sm" alt="Hidangan lezat">
                            </div>
                            <div class="col-12" data-aos="fade-up" data-aos-delay="300">
                                 <img src="https://images.unsplash.com/photo-1556742502-ec7c0e9f34b1?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" class="img-fluid rounded-3 shadow-sm" alt="Chef sedang memasak">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="visi-misi" class="visi-misi section">
            <div class="container">
                <div class="row align-items-center mb-5 pb-5 gy-5" data-aos="fade-up">
                    <div class="col-lg-6">
                        <div class="row g-4">
                            <div class="col-6">
                                <img src="https://images.unsplash.com/photo-1482049016688-2d3e1b311543?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" class="img-fluid rounded-3" alt="Makanan sehat">
                            </div>
                            <div class="col-6">
                                <img src="https://images.unsplash.com/photo-1498837167922-ddd27525d352?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" class="img-fluid rounded-3" alt="Ramen lezat">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 ps-lg-5">
                        <h3 class="section-title-left">VISI</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce scelerisque magna aliquet cursus tempus. Duis viverra metus et turpis elementum elementum. Aliquam rutrum placerat tellus et suscipit. Curabitur facilisis rhoncus tellus, at dignissim lorem. Ut ornare ex sit amet ornare volutpat. Maecenas vel nunc tortor.</p>
                    </div>
                </div>

                <div class="row align-items-center gy-5" data-aos="fade-up">
                    <div class="col-lg-6 pe-lg-5 order-2 order-lg-1">
                        <h3 class="section-title-left">MISI</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce scelerisque magna aliquet cursus tempus. Duis viverra metus et turpis elementum elementum. Aliquam rutrum placerat tellus et suscipit. Curabitur facilisis rhoncus tellus, at dignissim lorem. Ut ornare ex sit amet ornare volutpat. Maecenas vel nunc tortor.</p>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2">
                        <div class="row g-4">
                            <div class="col-6">
                                <img src="https://images.unsplash.com/photo-1496116218417-1a781b1c416c?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" class="img-fluid rounded-3" alt="Bahan masakan segar">
                            </div>
                            <div class="col-6">
                                 <img src="https://images.unsplash.com/photo-1625944230942-7809a744268e?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" class="img-fluid rounded-3" alt="Sayuran segar">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        </main>
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <h5>Tasty Food</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <div class="social-icons">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 mb-4">
                    <h5>Useful links</h5>
                    <ul class="footer-links">
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Galeri</a></li>
                        <li><a href="#">Testimonial</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6 mb-4">
                    <h5>Privacy</h5>
                    <ul class="footer-links">
                        <li><a href="#">Karir</a></li>
                        <li><a href="#">Tentang Kami</a></li>
                        <li><a href="#">Kontak Kami</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <h5>Contact Info</h5>
                    <p><i class="fas fa-envelope me-2"></i> tastyfood@gmail.com</p>
                    <p><i class="fas fa-phone me-2"></i> +62 812 3456 7890</p>
                    <p><i class="fas fa-map-marker-alt me-2"></i> Kota Bandung, Jawa Barat</p>
                </div>
            </div>
            <div class="copyright">
                <p>Copyright ©2025 All rights reserved</p>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Inisialisasi AOS (Animasi saat scroll)
            AOS.init({
                duration: 1000,
                easing: 'ease-in-out',
                once: true,
                mirror: false
            });
        });
    </script>
</body>
</html>