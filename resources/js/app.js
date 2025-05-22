import './bootstrap';
import { createIcons, icons } from 'lucide';

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


