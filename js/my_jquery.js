
/**
 * scrolling web-page
 */

$('nav a[href^="#"]').click(function(){
    var target = $(this).attr('href');
    $('html, body').animate({scrollTop: $(target).offset().top - 50}, 1000);
    return false;
});



