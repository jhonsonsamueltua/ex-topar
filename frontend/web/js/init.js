(function($){
  $(function(){

    $('.sidenav').sidenav();
    $('.parallax').parallax();
    $('.tooltipped').tooltip();
    $('.carousel').carousel();
    //carousel tentang
    $('.carousel.carousel-slider').carousel({
      fullWidth: true,
      indicators: true,
      duration: 500,
    }, setTimeout(autoplay, 5500));
   
    function autoplay() {
      $('.carousel').carousel('next');
      setTimeout(autoplay, 5500);
    }
  }); // end of document ready
})(jQuery); // end of jQuery name space
