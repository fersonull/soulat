import './bootstrap';
import { createIcons, icons } from 'lucide';

createIcons({ icons });

document.addEventListener('DOMContentLoaded', function () {
    const button = document.getElementById('user-menu-button');
    const dropdown = document.getElementById('user-dropdown');

    button.addEventListener('click', function () {
        dropdown.classList.toggle('hidden');
    });

    // Optional: Close dropdown on outside click
    document.addEventListener('click', function (e) {
        if (!button.contains(e.target) && !dropdown.contains(e.target)) {
            dropdown.classList.add('hidden');
        }
    });
});