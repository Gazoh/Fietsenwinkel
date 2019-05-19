$(document).ready(function () {
    // Bestellingen Tab active class aanzetten zodra je erop drukt
    $('#bestellingen').on('click', function () {
        $('#bestellingen').toggleClass("active");
    });

    // Menu Togglen
    $('#menu-toggle').click(function () {
        if ($(window).width() >= 500) {
            $('#sidebar-wrapper').toggleClass('clicked');
            $('.sidebar-title').toggleClass('display');
            $('.sidebarUsername').toggleClass('display')
        } else {
            $('#sidebar-wrapper').animate({
                width: 'toggle'
            }, 350);
        }
        console.log($('#sidebar-wrapper').innerWidth());
        if ($('#sidebar-wrapper').innerWidth() == 80) {
            $('.sidebar-title').removeClass('animated fadeIn');
            $('.sidebar-title').toggleClass('animated fadeIn');
            $('.sidebarUsername').removeClass('animated fadeIn');
            $('.sidebarUsername').toggleClass('animated fadeIn');
            $('#sidebarProfilePicture').removeClass('row justify-content-center')
            $("#chevron").removeClass('fas fa-chevron-right').toggleClass('fas fa-chevron-left');
        } else if ($('#sidebar-wrapper').innerWidth() == 240) {
            $('#sidebarProfilePicture').addClass('row justify-content-center');
            $("#chevron").removeClass('fas fa-chevron-left').toggleClass('fas fa-chevron-right');
        }
    });
});

