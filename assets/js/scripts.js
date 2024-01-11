$(function () {
  // init feather icons
  feather.replace();

  // init tooltip & popovers
  $('[data-toggle="tooltip"]').tooltip();
  $('[data-toggle="popover"]').popover();

  //page scroll
  $("a.page-scroll").bind("click", function (event) {
    var $anchor = $(this);
    $("html, body")
      .stop()
      .animate(
        {
          scrollTop: $($anchor.attr("href")).offset().top - 20,
        },
        1000
      );
    event.preventDefault();
  });

  // slick slider
  $(".slick-about").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 3000,
    dots: true,
    arrows: false,
  });

  //toggle scroll menu
  var scrollTop = 0;
  $(window).scroll(function () {
    var scroll = $(window).scrollTop();
    //adjust menu background
    if (scroll > 80) {
      if (scroll > scrollTop) {
        $(".smart-scroll").addClass("scrolling").removeClass("up");
      } else {
        $(".smart-scroll").addClass("up");
      }
    } else {
      // remove if scroll = scrollTop
      $(".smart-scroll").removeClass("scrolling").removeClass("up");
    }

    scrollTop = scroll;

    // adjust scroll to top
    if (scroll >= 600) {
      $(".scroll-top").addClass("active");
    } else {
      $(".scroll-top").removeClass("active");
    }
    return false;
  });

  // scroll top top
  $(".scroll-top").click(function () {
    $("html, body").stop().animate(
      {
        scrollTop: 0,
      },
      1000
    );
  });
});

var timer1 = 0;
function countdown() {
  clearTimeout(timer1);
  timer1 = setTimeout(clean, 2000);
}
function clean() {
  var element = document.getElementById("email_ocupied");
  if (element !== null) {
    document.getElementById("email_ocupied").innerHTML = null;
  }
}