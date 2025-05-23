import './bootstrap';
import { createIcons, icons } from 'lucide';
import Support from './Support.js';
import Alpine from 'alpinejs';

window.Alpine = Alpine;
Alpine.start();

createIcons({ icons });

let lastScrollTop = 0;
const nav = document.getElementById('nav');

window.addEventListener("scroll", function() {
    let currentScroll = window.pageYOffset || document.documentElement.scrollTop;

    if (currentScroll < lastScrollTop) {
        nav.classList.remove('shadow');

    } else if (currentScroll > lastScrollTop) {
        nav.classList.add('shadow');
    }

    lastScrollTop = currentScroll <= 0 ? 0 : currentScroll;
}, false);


Support.get('image')?.addEventListener('change', (e) => {
    Support.previewImage(e)
})

