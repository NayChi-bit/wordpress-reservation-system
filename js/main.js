(function($) {

  "use strict";

  var fullHeight = function() {

    $('.js-fullheight').css('height', $(window).height());
    $(window).resize(function(){
      $('.js-fullheight').css('height', $(window).height());
    });

  };
  fullHeight();

  var carousel = function() {
    $('.featured-carousel').owlCarousel({
      loop: true,
      autoplay: true,  // Keep autoplay enabled if desired
      margin:30,
      animateOut: 'fadeOut',
      animateIn: 'fadeIn',
      nav:true,
      dots: true,
      autoplayHoverPause: true,
      items: 1,
      navText : ["<span class='ion-ios-arrow-back'></span>","<span class='ion-ios-arrow-forward'></span>"],
      responsive:{
        0:{
          items:1
        },
        600:{
          items:2
        },
        1000:{
          items:4
        }
      },
       autoplayTimeout: 5000,
      smartSpeed: 1000,  // Adjust animation speed (ms)
      transitionStyle: 'fade',  // Choose animation style
    });

  };
  carousel();

})(jQuery);




