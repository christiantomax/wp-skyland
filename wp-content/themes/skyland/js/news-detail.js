var swiper = new Swiper(".home-properties", {
    slidesPerView: "auto",
    spaceBetween: 15,
    initialSlide: 0,
});

$(document).ready(function() {
    $('.slider').slick({
        centerMode: true,
        centerPadding: '60px',
        slidesToShow: 3,
        draggable: true,
        responsive: [
            {
            breakpoint: 768,
            settings: {
                arrows: false,
                centerMode: true,
                centerPadding: '40px',
                slidesToShow: 1
            }
            }
        ]
    });
});  