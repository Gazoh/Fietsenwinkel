$(document).ready(function () {
    $(document).on("click", "#bike-data", function () {
        let id = $(this).attr('data-id');
        let type = $(this).attr('data-role');
        console.log('id:' + id);
        console.log('Biketype:' + type);

        if (type === '1') {
            $('.details').attr('href', 'http://localhost/fietsenwinkel/Frontend/Herenfietsen_detail.php?id=' + id + '');
        } else if (type === '2') {
            $('.details').attr('href', 'http://localhost/fietsenwinkel/Frontend/Damesfietsen_detail.php?id=' + id + '');
        } else if (type === '3') {
            $('.details').attr('href', 'http://localhost/fietsenwinkel/Frontend/Kinderfietsen_detail.php?id=' + id + '');
        }
    });
});