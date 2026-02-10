import './bootstrap';
// import Swiper and modules styles
import { Navigation, Pagination } from 'swiper/modules';
import 'swiper/css';
import 'swiper/css/effect-creative';
import 'swiper/css/navigation';
import 'swiper/css/pagination';

import * as bootstrap from 'bootstrap';
import { initMmenu } from './global/mmenu';
import { initNavigation } from './global/navigation';
import createSpringSliderDiscography from './plugins/swiper/spring-swiper-discography';
import createSpringSliderMerch from './plugins/swiper/spring-swiper-merch';

initMmenu();
initNavigation();






// spring swiper discography
const sliderEl = document.querySelector('.spring-slider-discography');

createSpringSliderDiscography(sliderEl, {
    modules: [Navigation, Pagination],
    slidesPerView: 1,
    grabCursor: true,
    loop: true,
    navigation: {
        prevEl: '.swiper-button-prev',
        nextEl: '.swiper-button-next',
    },
    pagination: {
        el: sliderEl.querySelector('.swiper-pagination'),
        clickable: true,
    },
    breakpoints: {
        200: {
            slidesPerView: 1.3,
        },
        640: {
            slidesPerView: 2.3,
        },
        1100: {
            slidesPerView: 3.3,
        },
    },
});


// spring swiper merch
const sliderEl2 = document.querySelector('.spring-slider-merch');

createSpringSliderMerch(sliderEl2, {
    modules: [Navigation, Pagination],
    slidesPerView: 1,
    grabCursor: true,
    loop: true,
    navigation: {
        prevEl: sliderEl2.querySelector('.swiper-button-prev'),
        nextEl: sliderEl2.querySelector('.swiper-button-next'),
    },
    pagination: {
        el: sliderEl2.querySelector('.swiper-pagination'),
        clickable: true,
    },
    breakpoints: {
        200: {
            slidesPerView: 1.3,
        },
        640: {
            slidesPerView: 2.3,
        },
        1100: {
            slidesPerView: 2.3,
        },
    },
});
