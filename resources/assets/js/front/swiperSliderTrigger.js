const swiperSliderTrigger = new Swiper('.swiperSliderTrigger', {
    // Optional parameters
    slidesOffsetAfter: 2.2,
    slidesOffsetBefore: 2.2,
    slidesPerView: 1.3,
    spaceBetween: 20,
    loop: true,
    breakpoints: {
        // when window width is >= 320px
        768: {
            slidesPerView: 2.3,

        }
    }
    // If we need pagination
    // pagination: {
    // 	el: '.swiperSliderTrigger-pagination',
    // },

    // Navigation arrows
    // navigation: {
    // 	nextEl: '.swiperSliderTrigger-button-next',
    // 	prevEl: '.swiperSliderTrigger-button-prev',
    // },

    // And if we need scrollbar
    // scrollbar: {
    // 	el: '.swiperSliderTrigger-scrollbar',
    // },
});

const swiper_cats = new Swiper('.swiperSliderTrigger-cats', {
    // Optional parameters
    slidesOffsetAfter: 0,
    slidesOffsetBefore: 0,
    slidesPerView: 2.3,
    spaceBetween: 10,

    loop: true,
    breakpoints: {
        // when window width is >= 320px
        768: {
            slidesPerView: 6,

        }
    }
});
