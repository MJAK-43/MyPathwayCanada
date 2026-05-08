document.addEventListener('DOMContentLoaded', () => {
    const revealItems = document.querySelectorAll('[data-reveal]');

    if (!('IntersectionObserver' in window) || revealItems.length === 0) {
        revealItems.forEach((item) => item.classList.add('is-visible'));
        return;
    }

    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-visible');
                observer.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.15
    });

    revealItems.forEach((item) => observer.observe(item));
});
