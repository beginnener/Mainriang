import './bootstrap';

import Alpine from 'alpinejs';
import carousel from './carousel';

window.Alpine = Alpine;
Alpine.data('carousel', carousel); // register data carousel ke Alpine
Alpine.start();