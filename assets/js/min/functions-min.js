
function initMap() {
    var a = {
            lat: 63.1741871,
            lng: 14.5595061
        },
        b = new google.maps.Map(document.getElementById("map"), {
            zoom: 10,
            center: a,
            disableDefaultUI: !0,
            scrollwheel: !1
        });
    new google.maps.Marker({
        position: a,
        map: b,
        icon: "https://maps.google.com/mapfiles/ms/icons/blue-dot.png"
    }), $(document).width() > 768
}
$(document).ready(function() {
    $("body").scrollspy({
        target: ".navbar",
        offset: 50
    }), $("#mySidenav a").on("click", function(a) {
        if ("" !== this.hash) {
            a.preventDefault();
            var b = this.hash;
            $("html, body").animate({
                scrollTop: $(b).offset().top
            }, 800, function() {
                window.location.hash = ""
            })
        }
    })
}), $(document).ready(function() {
    $(".popupimage").click(function(a) {
        event.preventDefault(), $(".modal img").attr("src", $(this).attr("href")), $(".modal").modal("show")
    })
}), $(document).ready(function() {
    $('[data-toggle="tooltip"]').tooltip()
});


$('.handle').on('click', function(){
  $('.navbar ul').toggleClass('showing');
});


var touchsupport = ('ontouchstart' in window) || (navigator.maxTouchPoints > 0) || (navigator.msMaxTouchPoints > 0);
if (!touchsupport){ // browser doesn't support touch
    document.documentElement.className += " non-touch";
}


var el = document.getElementById('willChange');

// Set will-change when the element is hovered
el.addEventListener('mouseenter', hintBrowser);
el.addEventListener('animationEnd', removeHint);

function hintBrowser() {
  // The optimizable properties that are going to change
  // in the animation's keyframes block
  this.style.willChange = 'transform, opacity';
}

function removeHint() {
  this.style.willChange = 'auto';
}




var pContainerHeight = $('.hero-img').height();

$(window).scroll(function(){

  var wScroll = $(this).scrollTop();

  if (wScroll <= pContainerHeight) {

    $('.myName').css({
      'transform' : 'translate(0px, '+ wScroll /5 +'%)'
    });

    $('.fake').css({
      'transform' : 'translate(0px, -'+ wScroll /20 +'%)'
    });

  }
});


$(document).on('scroll', function(){
    if
    ($(document).scrollTop() > 100 ) {
        $('.collector').addClass('shrink');
    }   else {
        $('.collector').removeClass('shrink');
    }
});

