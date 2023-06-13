var swiper = new Swiper(".home-properties", {
    slidesPerView: "auto",
    spaceBetween: 15,
    initialSlide: 0,
});

$('.carousel').hover(function(){
    $('.drag-cursor').removeClass('lg:hidden')
    $('.drag-cursor').addClass('lg:block')
    
}, function(){
    $('.drag-cursor').addClass('lg:hidden')
    $('.drag-cursor').removeClass('lg:block')
})

window.addEventListener('mousemove', function(e){
    $('.drag-cursor').css({
        left:  e.pageX - 35,
        top:   e.clientY - 35
    });
})

$(document).ready(function(){
    $('.carousel').slick({  
        arrows: false,
        infinite: false,
    });
});