import './bootstrap';

import Alpine from 'alpinejs';
import money from 'alpinejs-money';

window.Alpine = Alpine;
Alpine.plugin(money);
Alpine.start();
import('preline');
