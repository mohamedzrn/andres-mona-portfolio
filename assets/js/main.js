document.addEventListener('DOMContentLoaded', () => {
    initNavToggle();
    initScrollFade();
    initGallery();
    initContactForm();
});

function initNavToggle() {
    const toggle = document.getElementById('navToggle');
    const nav = document.getElementById('siteNav');
    if (!toggle || !nav) return;
    toggle.addEventListener('click', () => {
        const isOpen = nav.classList.toggle('open');
        toggle.setAttribute('aria-expanded', String(isOpen));
    });
}

function initScrollFade() {
    const targets = document.querySelectorAll('.fade-in');
    if (!targets.length) return;
    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                observer.unobserve(entry.target);
            }
        });
        // A ratio threshold is unusable here: an element taller than
        // viewport / 0.15 can never show 15% of itself at once, so it would
        // stay at opacity 0 forever. The gallery grid stacks to ~14000px on a
        // phone, which is exactly that case. Fire on first pixel instead, and
        // get the "reveal on scroll" feel from the bottom margin rather than
        // from the ratio.
    }, { threshold: 0, rootMargin: '0px 0px -8% 0px' });
    targets.forEach((el) => observer.observe(el));
}

function initGallery() {
    const items = Array.from(document.querySelectorAll('.gallery-item[data-full]'));
    if (!items.length) return;

    const filterBtns = document.querySelectorAll('.filter-btn');

    filterBtns.forEach((btn) => {
        btn.addEventListener('click', () => {
            filterBtns.forEach((b) => b.classList.remove('active'));
            btn.classList.add('active');
            const category = btn.dataset.category;
            items.forEach((item) => {
                const match = category === 'all' || item.dataset.category === category;
                item.style.display = match ? '' : 'none';
            });
        });
    });

    const lightbox = document.getElementById('lightbox');
    if (!lightbox) return;
    const lightboxImg = lightbox.querySelector('img');
    const lightboxCaption = lightbox.querySelector('.lightbox-caption');
    let currentIndex = 0;

    function openLightbox(index) {
        currentIndex = index;
        const item = items[currentIndex];
        lightboxImg.src = item.dataset.full;
        lightboxImg.alt = item.dataset.caption || '';
        lightboxCaption.textContent = item.dataset.caption || '';
        lightbox.classList.add('open');
    }

    function showRelative(step) {
        currentIndex = (currentIndex + step + items.length) % items.length;
        const item = items[currentIndex];
        lightboxImg.src = item.dataset.full;
        lightboxImg.alt = item.dataset.caption || '';
        lightboxCaption.textContent = item.dataset.caption || '';
    }

    items.forEach((item, index) => {
        item.addEventListener('click', () => openLightbox(index));
    });

    lightbox.querySelector('.lightbox-close').addEventListener('click', () => {
        lightbox.classList.remove('open');
    });
    lightbox.querySelector('.lightbox-prev').addEventListener('click', () => showRelative(-1));
    lightbox.querySelector('.lightbox-next').addEventListener('click', () => showRelative(1));
    lightbox.addEventListener('click', (e) => {
        if (e.target === lightbox) lightbox.classList.remove('open');
    });
    document.addEventListener('keydown', (e) => {
        if (!lightbox.classList.contains('open')) return;
        if (e.key === 'Escape') lightbox.classList.remove('open');
        if (e.key === 'ArrowLeft') showRelative(-1);
        if (e.key === 'ArrowRight') showRelative(1);
    });
}

function initContactForm() {
    const form = document.getElementById('contactForm');
    if (!form) return;
    const status = document.getElementById('formStatus');

    form.addEventListener('submit', async (e) => {
        e.preventDefault();
        status.className = 'form-status';
        status.textContent = '';

        const submitBtn = form.querySelector('button[type="submit"]');
        submitBtn.disabled = true;
        submitBtn.textContent = 'Sending...';

        try {
            const response = await fetch(form.action, {
                method: 'POST',
                headers: { 'Accept': 'application/json' },
                body: new FormData(form),
            });
            const data = await response.json();

            if (data.success) {
                status.textContent = data.message || 'Message sent. Thank you.';
                status.className = 'form-status success';
                form.reset();
            } else {
                status.textContent = data.message || 'Something went wrong. Please try again.';
                status.className = 'form-status error';
            }
        } catch (err) {
            status.textContent = 'Could not send message. Please try again later.';
            status.className = 'form-status error';
        } finally {
            submitBtn.disabled = false;
            submitBtn.textContent = 'Send Message';
        }
    });
}
