document.addEventListener('DOMContentLoaded', () => {

    // Intersection Observer untuk efek fade-in saat scroll
    const sections = document.querySelectorAll('.content-section');

    const observerOptions = {
        root: null, // viewport
        rootMargin: '0px',
        threshold: 0.1 // 10% dari elemen terlihat
    };

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                observer.unobserve(entry.target); // Hentikan observasi setelah animasi
            }
        });
    }, observerOptions);

    sections.forEach(section => {
        observer.observe(section);
    });

});