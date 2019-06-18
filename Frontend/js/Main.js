/* Variables */
var windowsize = $(window).width();

// De cart dropdown menu niet laten closen wanneer je erop klikt
$('.dropdown-menu').click(function (e) {
    e.stopPropagation();
});

// Header filter laten zien van de fietsen pagina
$('#header-list').on('click', function () {
    $('#mobile-header').toggleClass('showFilter')
});

/*
// Zet de header in een nieuwe div zodra de width 991px is en hoger dan 991 weer verwijderen3

$(window).on('resize', function () {
    if (window.matchMedia('(max-width: 991px)').matches) {
        $("#nav-buttons").prependTo("#buttonsResponsive");
        $('#mobile-header').append($('#filter-header'));
    } else if (window.matchMedia('(min-width: 991px)').matches) {
        $('#mobile-header').empty();
    }
});

$(window).on('resize', function () {
    if (window.matchMedia('(min-width: 991px)').matches) {
        $('#mobile-header').empty();
    }
});*/
