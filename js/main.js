Fancybox.bind('[data-fancybox="depoimento"]', {
    groupAttr: false,
}); 

var swiper = new Swiper(".programas", {
    loop: true,
    spaceBetween: 25,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev'
    },
    pagination: {
        el: ".swiper-pagination",
    },
    mousewheel: true,
    keyboard: true,
    breakpoints: {
        320: {
            slidesPerView: 1
        },
        768: {
            slidesPerView: 2
        },
        1440: {
            slidesPerView: 2
        },
    },
});

var swiper = new Swiper(".depoimentos", {
    loop: true,
    spaceBetween: 40,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev'
    },
    pagination: {
        el: ".swiper-pagination",
    },
    breakpoints: {
        320: {
            slidesPerView: 1
        },
        768: {
            slidesPerView: 2
        },
        1440: {
            slidesPerView: 3
        },
    },
});

var swiper = new Swiper(".conteudos", {
    loop: true,
    spaceBetween: 25,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev'
    },
    pagination: {
        el: ".swiper-pagination",
    },
    breakpoints: {
        320: {
            slidesPerView: 1
        }
    },
});

var swiper = new Swiper(".tabs", {
    loop: false,
    slidesPerView: "auto",
    spaceBetween: 10,
    mousewheel: true,
    keyboard: true,
});