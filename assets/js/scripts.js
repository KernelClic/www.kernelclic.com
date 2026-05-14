document.addEventListener('DOMContentLoaded', function () {

  // ── MOBILE MENU ──────────────────────────────────────────────────────────
  const toggle   = document.getElementById('mobile-toggle');
  const mobileMenu = document.getElementById('mobile-menu');
  const menuIcon = document.getElementById('menu-icon');
  let menuOpen = false;

  if (toggle && mobileMenu) {
    toggle.addEventListener('click', function () {
      menuOpen = !menuOpen;
      mobileMenu.style.left = menuOpen ? '0' : '-100%';
      menuIcon.textContent  = menuOpen ? 'close' : 'menu';
    });
  }

  window.closeMobile = function () {
    menuOpen = false;
    if (mobileMenu) mobileMenu.style.left = '-100%';
    if (menuIcon) menuIcon.textContent = 'menu';
  };

  // ── ACTIVE NAV LINK ───────────────────────────────────────────────────────
  const currentPage = window.location.pathname.split('/').pop() || 'index.php';
  document.querySelectorAll('.nav-link').forEach(link => {
    const href = link.getAttribute('href');
    if (href === currentPage || (currentPage === '' && href === 'index.php')) {
      link.classList.remove('text-on-surface-variant');
      link.classList.add('text-primary', 'font-bold', 'border-b', 'border-primary', 'pb-0.5');
    }
  });

  // ── SCROLL FADE-UP ANIMATIONS ─────────────────────────────────────────────
  const fadeEls = document.querySelectorAll('.fade-up');
  if (fadeEls.length) {
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('visible');
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.08 });
    fadeEls.forEach(el => observer.observe(el));
  }

  // ── STATS COUNTER ANIMATION ───────────────────────────────────────────────
  const counters = document.querySelectorAll('.stat-number');
  if (counters.length) {
    const statsSection = document.querySelector('.stats-section') || document.querySelector('[class*="stats"]');
    const statsTarget = statsSection || counters[0].closest('section');
    if (statsTarget) {
      const counterObs = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            counters.forEach(counter => {
              const target = parseInt(counter.getAttribute('data-target'), 10);
              const duration = 1800;
              const step = target / (duration / 16);
              let current = 0;
              const timer = setInterval(() => {
                current += step;
                if (current >= target) { current = target; clearInterval(timer); }
                counter.textContent = Math.floor(current);
              }, 16);
            });
            counterObs.unobserve(entry.target);
          }
        });
      }, { threshold: 0.3 });
      counterObs.observe(statsTarget);
    }
  }

  // ── CONTACT FORM ─────────────────────────────────────────────────────────
  const contactForm = document.getElementById('contactForm');
  if (contactForm) {
    contactForm.addEventListener('submit', function (e) {
      e.preventDefault();
      const required = contactForm.querySelectorAll('input[required], textarea[required]');
      let valid = true;

      required.forEach(input => {
        if (!input.value.trim()) {
          valid = false;
          input.classList.add('border-red-500');
        } else {
          input.classList.remove('border-red-500');
          input.classList.add('border-primary');
        }
      });

      if (valid) {
        const btn = contactForm.querySelector('button[type="submit"]');
        const original = btn.textContent;
        btn.textContent = 'ENVIANDO...';
        btn.disabled = true;
        setTimeout(() => {
          alert('¡Mensaje enviado con éxito! Nos pondremos en contacto pronto.');
          contactForm.reset();
          btn.textContent = original;
          btn.disabled = false;
        }, 1500);
      }
    });
  }

});
