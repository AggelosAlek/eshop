$(document).ready(function(){
    $('.carousel-content').slick({
        dots:true,
        arrows:false,
        autoplay:true,

        });
        $('.new-arrivals-carousel').slick({
        dots: false,
        infinite: true,
        arrows:true,
        autoplay:true,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 1,
        responsive: [
            {
            breakpoint: 1300,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
                infinite: true,
                dots: false,
                arrows:false,
            }
            },
            {
            breakpoint: 600,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                arrows:false,
            }
            },
            {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows:false,
            }
            }
        ]
    });
    $('.brand-carousel').slick({
        dots: false,
        infinite: true,
        arrows:true,
        autoplay:true,
        speed: 300,
        slidesToShow: 6,
        slidesToScroll: 1,
        responsive: [
            {
            breakpoint: 1300,
            settings: {
            slidesToShow: 4,
            slidesToScroll: 1,
            infinite: true,
                dots: false,
                arrows:false
            }
            },
            {
            breakpoint: 600,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
                arrows:false
            }
            },
            {
            breakpoint: 480,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                arrows:false
            }
            }
        ]
    });
});