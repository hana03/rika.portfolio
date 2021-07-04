
// navメニュー

$(function () {
  $('.menu-btn-sp').on('click', function () {
    $('.header-nav').toggleClass('is-active');
  });

  $('.menu-item').on('click', function () {
    $('.header-nav').toggleClass('is-active');
  });
});

// skill

$(function () {


  $('.mask').click(function () {
    $('.works-lity-wrap').fadeIn();
  });
  $('.fa-times-circle').click(function () {
    $('.works-lity-wrap').fadeOut();
  });


  $('.mask2').click(function () {
    $('.works-lity-wrap2').fadeIn();
  });
  $('.fa-times-circle').click(function () {
    $('.works-lity-wrap2').fadeOut();
  });


  $('.mask3').click(function () {
    $('.works-lity-wrap3').fadeIn();
  });
  $('.fa-times-circle').click(function () {
    $('.works-lity-wrap3').fadeOut();
  });


  $('.mask4').click(function () {
    $('.works-lity-wrap4').fadeIn();
  });
  $('.fa-times-circle').click(function () {
    $('.works-lity-wrap4').fadeOut();
  });


  $('.mask5').click(function () {
    $('.works-lity-wrap5').fadeIn();
  });
  $('.fa-times-circle').click(function () {
    $('.works-lity-wrap5').fadeOut();
  });


  $('.mask6').click(function () {
    $('.works-lity-wrap6').fadeIn();
  });
  $('.fa-times-circle').click(function () {
    $('.works-lity-wrap6').fadeOut();
  });

  $(function () {
    $(function () {
      $(window).scroll(function () {
        $('.profile-info').each(function () {
          var elemPos = $(this).offset().top;
          var scroll = $(window).scrollTop();
          var windowHeight = $(window).height();
          if (scroll > elemPos - windowHeight) {
            $(this).addClass('effect-scroll');
          }
        });
      });
    });
    $(function () {
      $(window).scroll(function () {
        $('.about-profile').each(function () {
          var elemPos = $(this).offset().top;
          var scroll = $(window).scrollTop();
          var windowHeight = $(window).height();
          if (scroll > elemPos - windowHeight) {
            $(this).addClass('effect-scroll');
          }
        });
      });
    });
    $(function () {
      $(window).scroll(function () {
        $('.profile-massege-title').each(function () {
          var elemPos = $(this).offset().top;
          var scroll = $(window).scrollTop();
          var windowHeight = $(window).height();
          if (scroll > elemPos - windowHeight) {
            $(this).addClass('effect-scroll');
          }
        });
      });
    });
    $(function () {
      $(window).scroll(function () {
        $('.profile-br').each(function () {
          var elemPos = $(this).offset().top;
          var scroll = $(window).scrollTop();
          var windowHeight = $(window).height();
          if (scroll > elemPos - windowHeight) {
            $(this).addClass('effect-scroll');
          }
        });
      });
    });
    $(function () {
      $(window).scroll(function () {
        $('.skill-item-sc').each(function () {
          var elemPos = $(this).offset().top;
          var scroll = $(window).scrollTop();
          var windowHeight = $(window).height();
          if (scroll > elemPos - windowHeight) {
            $(this).addClass('effect-scroll');
          }
        });
      });
    });
    $(function () {
      $(window).scroll(function () {
        $('.works-image-hover').each(function () {
          var elemPos = $(this).offset().top;
          var scroll = $(window).scrollTop();
          var windowHeight = $(window).height();
          if (scroll > elemPos - windowHeight) {
            $(this).addClass('effect-scroll');
          }
        });
      });
    });
  });
});
