import Swiper from 'swiper';
import { Navigation, Pagination, Scrollbar } from 'swiper/modules';

export const initSwiperDiscography = () => {
    const swiperElement = document.querySelector(".swiper");

    if (!swiperElement) {
        return;
    }

    new Swiper(swiperElement, {
        modules: [Navigation, Pagination, Scrollbar],
        direction: 'vertical',
        loop: true,

        // If we need pagination
        pagination: {
            el: '.swiper-pagination',
        },

        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },

        // And if we need scrollbar
        scrollbar: {
            el: '.swiper-scrollbar',
        },
    });
}
