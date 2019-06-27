// Tooltip
$(function () {
    $('[data-toggle="tooltip"]').tooltip()
})

// De cart dropdown menu niet laten closen wanneer je erop klikt
$('.dropdown-menu').click(function (e) {
    e.stopPropagation();
});
