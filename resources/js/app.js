import './bootstrap';

import Alpine from 'alpinejs'

import.meta.glob([
    '../fonts/**',
    '../patterns/**',
    '../favicon/**',
    '../images/**',
]);

window.Alpine = Alpine

Alpine.start()