<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>@yield('title', 'Tasty Food')</title>

    <!-- Favicons -->
    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files (Lokal) -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
</head>

<body class="index-page">

    <!-- ======= Header ======= -->
    @include('partials.navbar')

    <main class="main">
        @yield('content')
    </main>

    <!-- ======= Footer ======= -->
    @include('partials.footer')

    <!-- Scroll Top Button -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files (Lokal) -->
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

    <!-- Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

<!-- Custom Styles -->
        <style>
            /* Font Import */
            @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap');
            @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700;800&family=Poppins:wght@400;500&display=swap');

            /* Global Styles */
            * {
                font-family: 'Inter', sans-serif;
            }

            body {
                color: #333;
                background: #fff;
            }

            /* == STYLE BARU UNTUK HEADER == */
            .navbar-custom {
                background: rgba(0, 0, 0, 0.9) !important;
                padding: 15px 0;
            }

            .navbar-brand {
                font-family: 'Montserrat', sans-serif;
                font-size: 1.8rem;
                font-weight: bold;
                color: white !important;
            }

            .navbar-nav .nav-link {
                font-family: 'Poppins', sans-serif;
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

            /* Hero Section */
            .hero {
                background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);
                padding: 120px 0 80px;
                margin-top: 72px;
                /* Menambahkan margin agar tidak tertutup header fixed-top */
            }

            .hero-content h1 {
                font-family: 'Montserrat', sans-serif;
                font-size: 3.5rem;
                font-weight: 300;
                color: #333;
                line-height: 1.2;
                margin-bottom: 0;
            }

            .hero-content h1 strong {
                font-weight: 800;
            }

            .hero-divider {
                width: 60px;
                height: 3px;
                background: #333;
                margin: 30px 0;
            }

            .hero-content p {
                font-size: 1.1rem;
                color: #666;
                line-height: 1.8;
                margin-bottom: 40px;
            }

            .btn-primary {
                background: #333;
                color: white;
                padding: 15px 40px;
                text-decoration: none;
                font-weight: 600;
                text-transform: uppercase;
                letter-spacing: 1px;
                border: none;
                transition: all 0.3s ease;
            }

            .btn-primary:hover {
                background: #ff6b35;
                color: white;
                transform: translateY(-2px);
            }

            .food-circle {
                position: relative;
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .food-circle img {
                width: 500px;
                height: 500px;
                object-fit: cover;
                border-radius: 50%;
                box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            }

            /* Section Titles */
            .section-title h2 {
                font-family: 'Montserrat', sans-serif;
                font-size: 2.5rem;
                font-weight: 800;
                color: #333;
                text-transform: uppercase;
                letter-spacing: 1px;
                text-align: center;
                margin-bottom: 0;
            }

            .section-divider {
                width: 60px;
                height: 3px;
                background: #333;
                margin: 20px auto 30px;
            }

            .section-title p {
                font-size: 1.1rem;
                color: #666;
                text-align: center;
                max-width: 600px;
                margin: 0 auto;
                line-height: 1.8;
            }

            /* ... sisa style Anda untuk services, news, gallery ... */
            .services {
                padding: 100px 0;
            }

            .service-item {
                /* ... */
            }

            .news {
                padding: 100px 0;
            }

            .news-item {
                /* ... */
            }

            .featured-news {
                /* ... */
            }

            .gallery {
                padding: 100px 0;
            }

            .gallery-item {
                /* ... */
            }

            .btn-secondary {
                background: #333;
                color: white;
                padding: 15px 40px;
                text-decoration: none;
                font-weight: 600;
                text-transform: uppercase;
                letter-spacing: 1px;
                border: none;
                transition: all 0.3s ease;
                display: inline-block;
            }

            .btn-secondary:hover {
                background: #ff6b35;
                color: white;
                transform: translateY(-2px);
            }


            /* == STYLE BARU UNTUK FOOTER == */
            .footer {
                background: #1a1a1a;
                color: white;
                padding: 60px 0 30px;
            }

            .footer h5 {
                font-family: 'Montserrat', sans-serif;
                color: #ffc107;
                margin-bottom: 25px;
                font-weight: 700;
            }

            .footer p,
            .footer a {
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

            /* Responsive Design */
            @media (max-width: 768px) {
                .hero-content h1 {
                    font-size: 2.5rem;
                }

                .food-circle img {
                    width: 300px;
                    height: 300px;
                }

                .section-title h2 {
                    font-size: 2rem;
                }

                .service-item,
                .news-item {
                    margin-bottom: 30px;
                }
            }
        </style>

</body>
</html>
