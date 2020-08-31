$(function(){
});
  // navメニュー

    $(function(){
      $('.menu-btn-sp').on('click', function(){
        $('.header-nav').toggleClass('is-active');
        
      });
    $(function(){
      $('.sp-nav-list').click(function(){
        $('.header-nav').toggleClass('is-active');
        
      });
    });   

    $(window).on('load',function(){
      
      // ここから文字を<span></span>で囲む記述
      $('.works-title').children().andSelf().contents().each(function() {
      if (this.nodeType == 3) {
      $(this).replaceWith($(this).text().replace(/(\S)/g, '<span>$1</span>'));
      }
      });
      // ここから一文字ずつフェードインさせる記述
      $('.works-title').css({'opacity':1});
      for (var i = 0; i <= $('.section-title').children().size(); i++) {
      $('.works-title').children('span:eq('+i+')').delay(50*i).animate({'opacity':1},50);
      };
      });
      



// skill

  $(function(){


$('.mask').click(function(){
$('.works-lity-wrap').fadeIn();
});
$('.fa-times-circle').click(function(){
  $('.works-lity-wrap').fadeOut();
}); 


$('.mask2').click(function(){
$('.works-lity-wrap2').fadeIn();
});
$('.fa-times-circle').click(function(){
  $('.works-lity-wrap2').fadeOut();
});


$('.mask3').click(function(){
$('.works-lity-wrap3').fadeIn();
});
$('.fa-times-circle').click(function(){
  $('.works-lity-wrap3').fadeOut();
});


$('.mask4').click(function(){
$('.works-lity-wrap4').fadeIn();
});
$('.fa-times-circle').click(function(){
  $('.works-lity-wrap4').fadeOut();
});


$('.mask5').click(function(){
$('.works-lity-wrap5').fadeIn();
});
$('.fa-times-circle').click(function(){
  $('.works-lity-wrap5').fadeOut();
});


$('.mask6').click(function(){
$('.works-lity-wrap6').fadeIn();
});
$('.fa-times-circle').click(function(){
  $('.works-lity-wrap6').fadeOut();
});

$(function(){
  $(function(){
    　$(window).scroll(function (){
        $('.profile-info').each(function(){
            var elemPos = $(this).offset().top;
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();
            if (scroll > elemPos - windowHeight){
                $(this).addClass('effect-scroll');
            }
        });
    　});
    });
  $(function(){
    　$(window).scroll(function (){
        $('.about-profile').each(function(){
            var elemPos = $(this).offset().top;
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();
            if (scroll > elemPos - windowHeight){
                $(this).addClass('effect-scroll');
            }
        });
    　});
    });
  $(function(){
    　$(window).scroll(function (){
        $('.profile-massege-title').each(function(){
            var elemPos = $(this).offset().top;
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();
            if (scroll > elemPos - windowHeight){
                $(this).addClass('effect-scroll');
            }
        });
    　});
    });
  $(function(){
    　$(window).scroll(function (){
        $('.profile-br').each(function(){
            var elemPos = $(this).offset().top;
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();
            if (scroll > elemPos - windowHeight){
                $(this).addClass('effect-scroll');
            }
        });
    　});
    });
  $(function(){
    　$(window).scroll(function (){
        $('.skill-item-sc').each(function(){
            var elemPos = $(this).offset().top;
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();
            if (scroll > elemPos - windowHeight){
                $(this).addClass('effect-scroll');
            }
        });
    　});
    });
  $(function(){
    　$(window).scroll(function (){
        $('.works-image-hover').each(function(){
            var elemPos = $(this).offset().top;
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();
            if (scroll > elemPos - windowHeight){
                $(this).addClass('effect-scroll');
            }
        });
    　});
    });

  });
});
});