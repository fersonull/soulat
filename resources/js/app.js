import './bootstrap';
import { createIcons, icons } from 'lucide';
import Support from './Support.js';
import Alpine from 'alpinejs';
// import './api/blog.js';

// window.Alpine = Alpine;

createIcons({
    icons,
    attrs: {
        'stroke-width': 1.5 
    }
});

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


// Support.get('images')?.addEventListener('change', (e) => {
//     Support.previewImage(e)
// })

document.addEventListener('postCreated', e => {
    Support.toast('Post uploaded!')
})

// document.addEventListener('invalidImageFormat', e => {
//     Support.toast('Something went wrong.')
// })