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


(function($) {
  // ページトップ制御
  var pagetop = $('#page-top');
  pagetop.hide();
  $(window).scroll(function() {
      if ($(this).scrollTop() > 100) {
          pagetop.fadeIn();
      } else {
          pagetop.fadeOut();
      }
  });
  pagetop.click(function() {
      $('body, html').animate({ scrollTop: 0 }, 500);
      return false;
  });

  // アコーディオン制御
  $(document).ready(function() {
      $('.ab_accordion_header').click(function() {
          // toggle the content
          $(this).next('.ab_accordion_content').slideToggle(200);
          // toggle the arrow icon
          $(this).toggleClass('active');
          // hide the other contents
          $('.ab_accordion_content').not($(this).next()).slideUp(200);
          // remove the active class from other headers
          $('.ab_accordion_header').not($(this)).removeClass('active');
      });
  });
})(jQuery);


