if ($(window).width() <= 376) {
    $('.slick-slider').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1
    });
} else if ($(window).width() <= 446) {
    $('.slick-slider').slick({
        infinite: true,
        slidesToShow: 2,
        slidesToScroll: 2
    });
} else if ($(window).width() <= 769) {
    $('.slick-slider').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3
    });
} else {
    $('.slick-slider').slick({
        infinite: true,
        slidesToShow: 5,
        slidesToScroll: 5
    });
}

// Button verplaatsen naar een div die ik heb aangemaakt
$('.slick-buttons').append($('.slick-prev'), $('.slick-next'));
// Classes toevoegen aan de buttons
$('.slick-prev').addClass('foo-button mdc-button mdc-button--dense mdc-ripple-upgraded');
$('.slick-next').addClass('foo-button mdc-button mdc-button--dense mdc-ripple-upgraded float-right');