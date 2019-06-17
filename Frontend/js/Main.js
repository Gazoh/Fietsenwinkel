// De cart dropdown menu niet laten closen wanneer je erop klikt
$('.dropdown-menu').click(function (e) {
    e.stopPropagation();
});

// Header filter laten zien van de fietsen pagina
    $('#header-list').on('click', function () {
        $('.header').toggleClass('display-inherit')
    });