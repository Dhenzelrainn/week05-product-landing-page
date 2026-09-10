const menuButton = document.querySelector('[data-menu-button]');
const mobileMenu = document.querySelector('[data-mobile-menu]');
const navbar = document.querySelector('[data-navbar]');
const progress = document.querySelector('[data-scroll-progress]');
const toTop = document.querySelector('[data-to-top]');

if (menuButton && mobileMenu) {
    menuButton.addEventListener('click', () => {
        const isOpen = menuButton.getAttribute('aria-expanded') === 'true';

        menuButton.setAttribute('aria-expanded', String(!isOpen));
        mobileMenu.classList.toggle('navigation-open', !isOpen);
        document.body.classList.toggle('menu-open', !isOpen);
    });

    mobileMenu.querySelectorAll('a').forEach((link) => {
        link.addEventListener('click', () => {
            menuButton.setAttribute('aria-expanded', 'false');
            mobileMenu.classList.remove('navigation-open');
            document.body.classList.remove('menu-open');
        });
    });
}

const updateScrollUI = () => {
    const currentScroll = window.scrollY;
    const maxScroll = document.documentElement.scrollHeight - window.innerHeight;
    const percentage = maxScroll > 0 ? (currentScroll / maxScroll) * 100 : 0;

    if (progress) {
        progress.style.width = `${percentage}%`;
    }

    if (navbar) {
        navbar.classList.toggle('site-header-scrolled', currentScroll > 14);
    }

    if (toTop) {
        toTop.classList.toggle('to-top-visible', currentScroll > 650);
    }
};

updateScrollUI();
window.addEventListener('scroll', updateScrollUI, { passive: true });

if (toTop) {
    toTop.addEventListener('click', () => {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });
}

const revealItems = document.querySelectorAll('[data-reveal]');

if ('IntersectionObserver' in window) {
    const revealObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach((entry) => {
            if (!entry.isIntersecting) return;

            entry.target.classList.add('is-visible');
            observer.unobserve(entry.target);
        });
    }, {
        threshold: 0.12,
        rootMargin: '0px 0px -40px 0px',
    });

    revealItems.forEach((item) => revealObserver.observe(item));
} else {
    revealItems.forEach((item) => item.classList.add('is-visible'));
}

const sections = [...document.querySelectorAll('main section[id], footer[id]')];
const navLinks = [...document.querySelectorAll('.nav-link')];

if ('IntersectionObserver' in window && sections.length && navLinks.length) {
    const sectionObserver = new IntersectionObserver((entries) => {
        const visible = entries
            .filter((entry) => entry.isIntersecting)
            .sort((a, b) => b.intersectionRatio - a.intersectionRatio)[0];

        if (!visible) return;

        navLinks.forEach((link) => {
            const href = link.getAttribute('href') || '';
            const active = href.endsWith(`#${visible.target.id}`);
            link.classList.toggle('nav-link-active', active);
        });
    }, {
        threshold: [0.25, 0.45, 0.65],
        rootMargin: '-20% 0px -55% 0px',
    });

    sections.forEach((section) => sectionObserver.observe(section));
}
