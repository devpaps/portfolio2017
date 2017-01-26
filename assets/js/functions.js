'use strict'

//Navigation
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("open").style.visibility = "hidden";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("open").style.visibility = "visible";
}


//Google Maps API
function initMap() {
  var östersund = {lat: 63.1741871, lng: 14.5595061};
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 10,
    center: östersund,
    scrollwheel: false
  });
  var marker = new google.maps.Marker({
    position: östersund,
    map: map,
    icon: 'http://maps.google.com/mapfiles/ms/icons/blue-dot.png'
  });

      var isDraggable = $(document).width() > 768 ? true : false; // If document (your website) is wider than 480px, isDraggable = true, else isDraggable = false

      var mapOptions = {
          draggable: isDraggable,

          scrollwheel: false, // Prevent users to start zooming the map when scrolling down the page
          //... options options options
      };
}


//Sliding thru the page based on what linked clicked
$(document).ready(function(){
  $('.slide-section').click(function(e){

    var linkHref = $(this).attr('href');

    $('html, body').animate({
      scrollTop: $(linkHref).offset().top
    });

    e.preventDefault();
  });
});


//Bootstrap Modal
$(document).ready(function(){
  $('.popupimage').click(function(e){
    event.preventDefault();
    $('.modal img').attr('src', $(this).attr('href'));
    $('.modal').modal('show');
  });
});


$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
});
