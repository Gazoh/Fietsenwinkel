if ($(window).width() <= 509) {
    $('.slick-slider').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1
    });
} else if ($(window).width() <= 709) {
    $('.slick-slider').slick({
        infinite: true,
        slidesToShow: 2,
        slidesToScroll: 2
    });
} else if ($(window).width() <= 809) {
    $('.slick-slider').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3
    });
} else if ($(window).width() <= 1009) {
    $('.slick-slider').slick({
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 4
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

// Previous en Next text veranderen naar Vorige en Volgende
$(".slick-prev").html('Vorige');
$(".slick-next").html('Volgende');