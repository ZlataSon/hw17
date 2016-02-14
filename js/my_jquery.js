
/**
 * scrolling web-page
 */

$('nav a[href^="#"]').click(function(){
    var target = $(this).attr('href');
    $('html, body').animate({scrollTop: $(target).offset().top - 50}, 1000);
    return false;
});

/**
 * video carousel
 */

$('.owl-carousel').owlCarousel({
    items:1,
    merge:true,
    loop:true,
    margin:10,
    video:true,
    lazyLoad:true,
    center:true,
    responsive:{
        480:{
            items:2
        },
        600:{
            items:4
        }
    }
})



