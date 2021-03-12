require('./bootstrap');

require('alpinejs');

import Swup from 'swup';
import SwupPreloadPlugin from '@swup/preload-plugin';
import SwupSlideTheme from '@swup/slide-theme';

window.swup = new Swup({
    plugins: [new SwupPreloadPlugin(), new SwupSlideTheme()]
});

document.addEventListener('swup:contentReplaced', (event) => {
    window.livewire.restart();
});
