// De cart dropdown menu niet laten closen wanneer je erop klikt
$('.dropdown-menu').click(function (e) {
    e.stopPropagation();
});

/*

// Remove show class wanneer er op de cancel button word geklikt
$('#CancelButtonDropdown').off('click').on('click', function () {
   $('#dropdown').removeClass('show')
});

*/
