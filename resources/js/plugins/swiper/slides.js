import createSpringSliderDiscography from './spring-swiper';
import createSpringSliderMerch from './spring-swiper';
import createSpringSliderShop from './spring-swiper';
import {Navigation, Pagination} from "swiper/modules";


// spring swiper discography
const sliderEl = document.querySelector('.spring-slider-discography');

if (sliderEl) {
    createSpringSliderDiscography(sliderEl, {
        modules: [Navigation, Pagination],
        slidesPerView: 1,
        grabCursor: true,
        loop: true,
        navigation: {
            prevEl: sliderEl.querySelector('.swiper-button-prev'),
            nextEl: sliderEl.querySelector('.swiper-button-next'),
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
}


// spring swiper merch
const sliderEl2 = document.querySelector('.spring-slider-merch');
const merchArrows = document.querySelector('.spring-slider-merch-navigation');

if (sliderEl2 && merchArrows) {
    createSpringSliderMerch(sliderEl2, {
        modules: [Navigation, Pagination],
        slidesPerView: 1,
        grabCursor: true,
        loop: true,
        navigation: {
            prevEl: merchArrows.querySelector('.swiper-button-prev'),
            nextEl: merchArrows.querySelector('.swiper-button-next'),
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
}


// spring swiper shop list
const sliderEl3 = document.querySelector('.spring-slider-shop');
const shopArrows = document.querySelector('.spring-slider-shop-navigation');

if (sliderEl3 && shopArrows) {
    createSpringSliderShop(sliderEl3, {
        modules: [Navigation, Pagination],
        slidesPerView: 1,
        grabCursor: true,
        loop: true,
        navigation: {
            prevEl: shopArrows.querySelector('.swiper-button-prev'),
            nextEl: shopArrows.querySelector('.swiper-button-next'),
        },
        pagination: {
            el: sliderEl3.querySelector('.swiper-pagination'),
            clickable: true,
        },
        breakpoints: {
            200: {
                slidesPerView: 1.3,
            },
            640: {
                slidesPerView: 3.3,
            },
            1100: {
                slidesPerView: 5.3,
            },
        },
    });
}
