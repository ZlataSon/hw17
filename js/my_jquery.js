
/**
 * scrolling web-page
 */

$('nav a[href^="#"]').click(function(){
    var target = $(this).attr('href');
    $('html, body').animate({scrollTop: $(target).offset().top - 50}, 1000);
    return false;
});


/**
 * Carousel
 */

$(document).ready(function() {

    $("#owl-demo-2").owlCarousel({
        items : 4,
        lazyLoad : true,
        navigation : true
    });

});



