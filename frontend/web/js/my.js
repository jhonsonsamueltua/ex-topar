
//SCROLLLLL

//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

//GALERYYYY
$(document).ready(function(){
    $("img").click(function(){
    var t = $(this).attr("src");
    $(".modal-body").html("<img src='"+t+"' class='modal-img'>");
    $("#myModal").modal();
  });
  
  $("video").click(function(){
    var v = $("video > source");
    var t = v.attr("src");
    $(".modal-body").html("<video class='model-vid' controls><source src='"+t+"' type='video/mp4'></source></video>");
    $("#myModal").modal();  
  });
  });//EOF Document.ready

  //map
  function initMap() {
    // The location of Uluru
    var uluru = {lat: 2.566100, lng: 99.333504};
    // The map, centered at Uluru
    var map = new google.maps.Map(
        document.getElementById('map'), {zoom: 14, center: uluru});
    // The marker, positioned at Uluru
    var marker = new google.maps.Marker({position: uluru, map: map});
  }

  //souvenir
  $(".hover").mouseleave(
    function () {
      $(this).removeClass("hover");
    }
  );
  