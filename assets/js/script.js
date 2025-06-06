  $(document).ready(function(){
    $(".main-slider").owlCarousel({
      items: 1,
      loop: true,
      autoplay: true,
      autoplayTimeout: 5000,
      autoplayHoverPause: true,
      nav: true,
      dots: true,
      navText: ["<", ">"],
      animateOut: 'fadeOut',
      animateIn: 'fadeIn'
    });
  });
