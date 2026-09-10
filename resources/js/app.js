import './bootstrap';

document.addEventListener('DOMContentLoaded', () => {
    const button = document.querySelector('[data-menu-button]');
    const menu = document.querySelector('[data-mobile-menu]');

    if (button && menu) {
        const closeMenu = () => {
            menu.classList.add('hidden');
            button.setAttribute('aria-expanded', 'false');
        };

        button.addEventListener('click', () => {
            const isOpen = !menu.classList.contains('hidden');
            menu.classList.toggle('hidden');
            button.setAttribute('aria-expanded', String(!isOpen));
        });

        menu.querySelectorAll('a').forEach((link) => link.addEventListener('click', closeMenu));
    }

    const contactForm = document.querySelector('[data-contact-form]');
    const formMessage = document.querySelector('[data-form-message]');
    if (contactForm && formMessage) {
        contactForm.addEventListener('submit', (event) => {
            event.preventDefault();
            formMessage.classList.remove('hidden');
        });
    }

    const signInForm = document.querySelector('[data-demo-signin]');
    const signInMessage = document.querySelector('[data-signin-message]');
    if (signInForm && signInMessage) {
        signInForm.addEventListener('submit', (event) => {
            event.preventDefault();
            signInMessage.classList.remove('hidden');
        });
    }
});
