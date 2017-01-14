
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("open").style.visibility = "hidden";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("open").style.visibility = "visible";
}


function initMap() {
  var östersund = {lat: 63.1741871, lng: 14.5595061};
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 10,
    center: östersund,
    disableDefaultUI: true
  });
  var marker = new google.maps.Marker({
    position: östersund,
    map: map
  });
}
