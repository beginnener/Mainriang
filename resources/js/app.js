import './bootstrap';

import Alpine from 'alpinejs';
import carousel from './carousel';
import multiItemCarousel from './multi-item-carousel';

window.Alpine = Alpine;
Alpine.data('carousel', carousel); // register data carousel ke Alpine
Alpine.data('multiItemCarousel', multiItemCarousel); // register data multi-item-carousel ke Alpine
Alpine.start();