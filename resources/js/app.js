import './bootstrap';

document.addEventListener('DOMContentLoaded', () => {
    // Navbar scroll effect
    const navbar = document.querySelector('.navbar-custom-home');
    if (navbar) {
        const navbarScrolled = () => {
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        }
        window.addEventListener('load', navbarScrolled);
        document.addEventListener('scroll', navbarScrolled);
    }
});