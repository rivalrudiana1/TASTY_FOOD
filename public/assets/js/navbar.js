document.addEventListener('DOMContentLoaded', function() {
    "use strict";

    /**
     * Sticky Header and Menu Position Handler
     */
    const header = document.querySelector('#header');
    const navbarNav = document.querySelector('.navbar-nav');
    
    function updateHeaderState() {
        if (window.scrollY > 50) {
            header.classList.add('scrolled');
            // Hanya ubah posisi menu jika di halaman home
            if (document.body.classList.contains('index-page')) {
                navbarNav.style.marginLeft = 'auto';
                navbarNav.style.marginRight = '0';
            }
        } else {
            header.classList.remove('scrolled');
            // Kembalikan ke posisi awal jika di halaman home
            if (document.body.classList.contains('index-page')) {
                navbarNav.style.marginLeft = '1rem';
                navbarNav.style.marginRight = 'auto';
            }
        }
    }

    // Set initial state
    updateHeaderState();
    
    // Update on scroll
    window.addEventListener('scroll', updateHeaderState);
});