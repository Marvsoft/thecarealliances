$(document).ready(function () {
    $(".slick-slider").slick({
        autoplay: true,
        dots: true,
        prevArrow: '<button type="button" class="slick-prev">Previous</button>',
        nextArrow: '<button type="button" class="slick-next">Next</button>',
    });
});

// Initialize AOS
AOS.init();
