function initMap(){var o={lat:63.1741871,lng:14.5595061},t=new google.maps.Map(document.getElementById("map"),{zoom:10,center:o,disableDefaultUI:!0,scrollwheel:!1});new google.maps.Marker({position:o,map:t,icon:"https://maps.google.com/mapfiles/ms/icons/blue-dot.png"}),$(document).width()>768}$(document).ready(function(){$("body").scrollspy({target:".navbar",offset:50}),$("#mySidenav a").on("click",function(o){if(""!==this.hash){o.preventDefault();var t=this.hash;$("html, body").animate({scrollTop:$(t).offset().top},800,function(){window.location.hash=""})}})}),$(document).ready(function(){$(".popupimage").click(function(o){event.preventDefault(),$(".modal img").attr("src",$(this).attr("href")),$(".modal").modal("show")})}),$(document).ready(function(){$('[data-toggle="tooltip"]').tooltip()}),$(".handle").on("click",function(){$(".navbar ul").toggleClass("showing")});