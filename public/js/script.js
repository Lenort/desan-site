// public/js/script.js

// Появление элементов при скролле
document.addEventListener('DOMContentLoaded', () => {
    const faders = document.querySelectorAll('.scroll-fade');
    const appearOnScroll = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                appearOnScroll.unobserve(entry.target);
            }
        });
    }, { threshold: 0.3 });

    faders.forEach(el => appearOnScroll.observe(el));
});
