require('./bootstrap');

require('alpinejs');

import Swup from 'swup';
import SwupPreloadPlugin from '@swup/preload-plugin';
import SwupSlideTheme from '@swup/slide-theme';

/*var swup = document.getElementById('swup');
if (swup) {
    window.swup = new Swup({
        plugins: [new SwupPreloadPlugin(), new SwupSlideTheme()]
    });
}

document.addEventListener('swup:contentReplaced', (event) => {
    window.livewire.restart();
}); */


import Swal from 'sweetalert2/src/sweetalert2.js';
window.Swal = Swal;
