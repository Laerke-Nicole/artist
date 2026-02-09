import './bootstrap';
// import Swiper and modules styles
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';

// Import Bootstrap JavaScript
import * as bootstrap from 'bootstrap';
import { initMmenu } from './global/mmenu';
import { initSwiperDiscography } from './plugins/swiper/discography';

initMmenu();
initSwiperDiscography();
