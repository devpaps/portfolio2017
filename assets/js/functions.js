"use strict";

$(document).ready(function() {

    var $wrapper = $('.wrapper');

    $wrapper.css('display', 'block');

    $wrapper.one("webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend", function() {
    $(this).css('opacity', '1');
});

});



function openNav() {
    document.getElementById("mySidenav").style.marginLeft = "0px", document.getElementById("open").style.visibility = "hidden"
}

function closeNav() {
    document.getElementById("mySidenav").style.marginLeft = "-250px", document.getElementById("open").style.visibility = "visible"
}

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
