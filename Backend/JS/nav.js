@import()
// De eerste letter van de username
var username = "Cem";
$('#usernameNav').text(username);
$('#usernameFirstLetter').text(username.slice(0, 1)).css('color','#fff');