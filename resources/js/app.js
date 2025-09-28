import './bootstrap';

document.addEventListener('DOMContentLoaded', () => {
    const header = document.querySelector('#header');
    if (header) {
        const headerScrolled = () => {
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        }
        window.addEventListener('load', headerScrolled);
        document.addEventListener('scroll', headerScrolled);
    }
});