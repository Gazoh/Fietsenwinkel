$(document).ready(function () {
    $(document).on("click", "#bike-data", function() {
        let id = $(this).attr('data-id');
        console.log(id);
        $('.detail').attr('href', 'http://localhost/fietsenwinkel/Frontend/Kinderfietsen_detail.php?id='+ id +'');
    });
});