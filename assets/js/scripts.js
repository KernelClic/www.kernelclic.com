document.addEventListener('DOMContentLoaded', function () {
    // Mobile Menu Toggle
    const mobileToggle = document.getElementById('mobile-toggle');
    const navMenu = document.getElementById('nav-menu');

    if (mobileToggle) {
        mobileToggle.addEventListener('click', function () {
            navMenu.classList.toggle('active');
            const icon = mobileToggle.querySelector('i');
            if (navMenu.classList.contains('active')) {
                icon.classList.remove('fa-bars');
                icon.classList.add('fa-times');
            } else {
                icon.classList.remove('fa-times');
                icon.classList.add('fa-bars');
            }
        });
    }

    // Active Link Highlighting
    const currentPath = window.location.pathname.split('/').pop();
    const navLinks = document.querySelectorAll('.nav-link');

    navLinks.forEach(link => {
        if (link.getAttribute('href') === currentPath || (currentPath === '' && link.getAttribute('href') === 'index.php')) {
            link.classList.add('active');
        }
    });

    // Scroll Animation
    const observerOptions = {
        threshold: 0.1
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('fade-in-up');
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    document.querySelectorAll('.animate-on-scroll').forEach(el => {
        observer.observe(el);
    });

    // Stats Counter Animation
    const counters = document.querySelectorAll('.stat-number');
    if (counters.length > 0) {
        const statsSection = document.querySelector('.stats-section');
        const counterObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    counters.forEach(counter => {
                        const target = parseInt(counter.getAttribute('data-target'));
                        const duration = 1800;
                        const step = target / (duration / 16);
                        let current = 0;
                        const timer = setInterval(() => {
                            current += step;
                            if (current >= target) {
                                current = target;
                                clearInterval(timer);
                            }
                            counter.textContent = Math.floor(current);
                        }, 16);
                    });
                    counterObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.3 });
        if (statsSection) counterObserver.observe(statsSection);
    }

    // Form Validation
    const contactForm = document.getElementById('contactForm');
    if (contactForm) {
        contactForm.addEventListener('submit', function (e) {
            e.preventDefault();

            let isValid = true;
            const inputs = contactForm.querySelectorAll('input[required], textarea[required]');

            inputs.forEach(input => {
                if (!input.value.trim()) {
                    isValid = false;
                    input.style.borderColor = 'red';
                } else {
                    input.style.borderColor = '#E0E0E0';
                }
            });

            if (isValid) {
                // Simulate form submission
                const btn = contactForm.querySelector('button[type="submit"]');
                const originalText = btn.innerText;
                btn.innerText = 'Enviando...';
                btn.disabled = true;

                setTimeout(() => {
                    alert('¡Mensaje enviado con éxito! Nos pondremos en contacto pronto.');
                    contactForm.reset();
                    btn.innerText = originalText;
                    btn.disabled = false;
                }, 1500);
            } else {
                alert('Por favor, complete todos los campos requeridos.');
            }
        });
    }
});
