<footer class="footer">
    <div class="container">
        <div class="row">
            <!-- Brand -->
            <div class="col-lg-4 col-md-6 mb-4">
                <h5>Tasty Food</h5>
                <p>
                    Hadir dengan sajian sehat dan lezat dari bahan segar pilihan.
                    Tasty Food berkomitmen menghadirkan pengalaman kuliner yang memuaskan setiap pelanggan.
                </p>
                <div class="social-icons">
                    <a href="{{ $info->facebook ?? '#' }}"><i class="bi bi-facebook"></i></a>
                    <a href="{{ $info->twitter ?? '#' }}"><i class="bi bi-twitter"></i></a>
                </div>
            </div>

            <!-- Useful links -->
            <div class="col-lg-2 col-md-6 mb-4">
                <h5>Useful links</h5>
                <ul class="footer-links">
                    <li><a href="#"><i class="bi bi-journal-text me-2"></i> Blog</a></li>
                    <li><a href="#"><i class="bi bi-bluesky me-2"></i> Hewan</a></li>
                    <li><a href="#"><i class="bi bi-images me-2"></i> Galeri</a></li>
                    <li><a href="#"><i class="bi bi-chat-dots me-2"></i> Testimonial</a></li>
                </ul>
            </div>

            <!-- Privacy -->
            <div class="col-lg-2 col-md-6 mb-4">
                <h5>Privacy</h5>
                <ul class="footer-links">
                    <li><a href="#"><i class="bi bi-briefcase me-2"></i> Karir</a></li>
                    <li><a href="#"><i class="bi bi-info-circle me-2"></i> Tentang Kami</a></li>
                    <li><a href="#"><i class="bi bi-envelope-open me-2"></i> Kontak Kami</a></li>
                    <li><a href="#"><i class="bi bi-gear me-2"></i> Servis</a></li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div class="col-lg-4 col-md-6 mb-4">
                <h5>Contact Info</h5>
                <p><i class="bi bi-envelope me-2"></i> {{ $info->email ?? 'Email belum diisi' }}</p>
                <p><i class="bi bi-telephone me-2"></i> {{ $info->telepon ?? 'Telepon belum diisi' }}</p>
                <p><i class="bi bi-geo-alt me-2"></i> {{ $info->alamat ?? 'Alamat belum diisi' }}</p>
            </div>
        </div>

        <!-- Copyright -->
        <div class="copyright">
            <p>Copyright ©2025 All rights reserved</p>
        </div>
    </div>
</footer>
