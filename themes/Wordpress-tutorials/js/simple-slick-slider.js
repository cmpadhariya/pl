window.$ = jQuery;
$(document).ready(function(){
    jQuery('.demo-slider__inner').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1
    });
});
