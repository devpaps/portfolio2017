
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("open").style.visibility = "hidden";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("open").style.visibility = "visible";
}


$(document).ready(function(){
  $('.popupimage').click(function(event){
    event.preventDefault();
    $('.modal img').attr('src', $(this).attr('href'));
    $('.modal').modal('show');
  });
});
