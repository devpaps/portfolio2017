"use strict";

//Navigation
function openNav() {
  document.getElementById("mySidenav").style.marginLeft = "0px";
  document.getElementById("open").style.visibility = "hidden";
}

function closeNav() {
    document.getElementById("mySidenav").style.marginLeft = "-250px";
    document.getElementById("open").style.visibility = "visible";
}


//Google Maps API
function initMap() {
  var östersund = {lat: 63.1741871, lng: 14.5595061};
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 10,
    center: östersund,
    disableDefaultUI: true,
    scrollwheel: false
  });
  var marker = new google.maps.Marker({
    position: östersund,
    map: map,
    icon: 'https://maps.google.com/mapfiles/ms/icons/blue-dot.png'
  });

      var isDraggable = $(document).width() > 768 ? true : false; // If document (your website) is wider than 480px, isDraggable = true, else isDraggable = false

      var mapOptions = {
          draggable: isDraggable,

          scrollwheel: false, // Prevent users to start zooming the map when scrolling down the page
          //... options options options
      };
}

$(document).ready(function(){
  // Add scrollspy to <body>
  $('body').scrollspy({target: ".navbar", offset: 50});

  // Add smooth scrolling on all links inside the navbar
  $("#mySidenav a").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = '';
      });
    }  // End if
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
