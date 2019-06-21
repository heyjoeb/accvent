/* main.js */
$(document).ready(function() {
  // SCROLL ANIMATION
    var $animationElements = $('.animate-element');
    var $window = $(window);

    function checkIfInView() {
      var windowHeight = $window.height();
      var windowTopPosition = $window.scrollTop();
      var windowBottomPosition = (windowTopPosition + windowHeight);
      $.each($animationElements, function() {
        var $element = $(this);
        var elementHeight = $element.outerHeight();
        var elementTopPosition = $element.offset().top;
        var elementBottomPosition = (elementTopPosition + elementHeight);
        //check to see if this current container is within viewport
        if ((elementBottomPosition >= windowTopPosition) &&
            (elementTopPosition <= windowBottomPosition)) {
          $element.addClass('in-view');
        } else {
          $element.removeClass('in-view');
        }
      });
    }
    $window.on('scroll resize', checkIfInView);
    $window.trigger('scroll');
  // ADD CLASS TO BODY ON SCROLL
    $(function () {
        $(window).scroll(function () {
            var top_offset = $(window).scrollTop();
            $('#scrollTop').html(top_offset);
            if (top_offset == 0) {
                $('body')
                .removeClass('is-scrolling')
            } else {
                $('body').addClass('is-scrolling');
            }
        })
    });
  // scrollspy
  $('body').scrollspy({ target: '#scroller' });
  // smoothscroll
  $('.section-main-header .nav-link, .navbar-brand, .footer-scroll a').click(function() {
    var sectionTo = $(this).attr('href');
    $('html, body').animate({
      scrollTop: $(sectionTo).offset().top
    }, 500);
  });
  //scroll donw
  $(".section-intro__btn").click(function() {
    $('html, body').animate({
        scrollTop: $("#program").offset().top
    }, 1000);
  });
  /* gallery slider */
  $('.main-slider').slick({
    centerMode: true,
    centerPadding: '20%',
    slidesToShow: 1,
    responsive: [
      {
        breakpoint: 766,
        settings: {
          centerMode: false,
          centerPadding: 0
        }
      }
  ]
  });
});

function init() {
  // FADE IN
  $('body').removeClass('fade');   
}
window.onload = init();
