// Tooltip
$(function () {
    $('[data-toggle="tooltip"]').tooltip()
})

// De cart dropdown menu niet laten closen wanneer je erop klikt
$('.dropdown-menu').click(function (e) {
    e.stopPropagation();
});

// Header filter laten zien van de fietsen pagina
$('#header-list').on('click', function () {
    $('#mobile-header').toggleClass('showFilter');
    $('#mobile-header-overlay').removeClass('d-none').addClass('mobile-header-overlay d-inherit');
});

// Hide Filter wanneer je op overlay klikt
$('#mobile-header-overlay').on('click', function () {
    $('#mobile-header-overlay').addClass('mobile-header-overlay d-none');
    $('#mobile-header').removeClass('showFilter');
});