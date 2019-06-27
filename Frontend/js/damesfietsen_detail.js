$(document).ready(function () {
    $(document).on("click", "#bike-data", function() {
        let id = $(this).attr('data-id');
        console.log(id);
        $('.detail').attr('href', 'http://localhost/fietsenwinkel/Frontend/Damesfietsen_detail.php?id='+ id +'');
    });
});


/*
let id = $(this).attr('data-value');
$('#fietsen_detail').attr('href', 'http://localhost/fietsenwinkel/Frontend/Damesfietsen_detail.php?id='+ id +'');
console.log(id);

*/
