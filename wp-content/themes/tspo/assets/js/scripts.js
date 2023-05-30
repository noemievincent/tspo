import jquery from 'jquery';

window.$ = jquery;
window.jQuery = jquery;

import 'slick-carousel';

import './plugins/fancybox';

document.addEventListener("DOMContentLoaded", function () {
    init();
});

function init() {
    document.body.classList.remove('no-js');
    document.body.classList.add('js-enabled');

    servicesSlider();
    principlesSlider();
}

function servicesSlider() {
    $(".home .services .slider").slick({
        infinite: false,

        mobileFirst: true,

        slidesToShow: 1,
        slidesToScroll: 1,
        swipeToSlide: true,

        arrows: false,

        dots: true,
        customPaging: function (slider, i) {
            return '<span class="slick-bullet"></span>';
        },

        responsive: [
            {
                breakpoint: 1230,
                settings: {
                    slidesToShow: 2.2,
                    slidesToScroll: 1,
                },
            },
        ],

    });
}

function principlesSlider() {
    $(".about .principles .slider").slick({
        infinite: true,

        mobileFirst: true,

        slidesToShow: 1,
        slidesToScroll: 1,
        swipeToSlide: true,

        arrows: true,
        prevArrow: $('.prev'),
        nextArrow: $('.next'),

        dots: true,
        customPaging: function(slider, index) {
            return '<span class="slick-number">' + (index + 1) + '</span>';
        }

    });
}



