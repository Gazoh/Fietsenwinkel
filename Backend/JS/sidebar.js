$(document).ready(function(){
   $('#bestellingen').on('click',function () {
      $('#bestellingen').toggleClass("active");
   });

   // <!-- Menu Toggle Script -->
   $("#menu-toggle, #menu-toggle2").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
      $(".sidebar-nav").fadeToggle();
   });
});