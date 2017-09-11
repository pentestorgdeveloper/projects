// svg fixed
// bg blend-mode fixed
// object-fit fixed
if(!Modernizr.objectfit) {
  $('.team__img').each(function() {
    var $container = $(this),
    imgUrl = $container.find('img').prop('src');

    if(imgUrl) {
      $container.css('backgroundImage', 'url(' + imgUrl + ')')
                .addClass('compat-object-fit');
    }
  });
}
if(!Modernizr.backgroundblendmode) {
  $('.blend-mode').each(function() {
    var $container = $(this),
    noblendUrl = $container.attr('data-noblend');
    console.log(noblendUrl);
    if(noblendUrl) {
      $container.css('backgroundImage', 'url(' + noblendUrl + ')')
    }
  });
}
$(function() {
	// Custom JS
  var wWidth;
  function windowWidth() {
    wWidth = $(window).width();
    if(wWidth > 600) {
      $('html').css('overflow', 'auto');
    }
  }
  windowWidth();
  $(window).resize(windowWidth);

  mainMenu();

  function mainMenu() {
    windowWidth();
    var menuBtn = $('.toggle__menu');
    if(wWidth > 600) {
      menuBtn.click(function() {
        menuBtn.toggleClass('is_active');
        if(menuBtn.is('.is_fixed')) {
          menuBtn.removeClass('is_fixed');
        }

        $('.header__top').toggleClass('is_active');
      });
    }
    if(wWidth <= 600) {
      menuBtn.click(function() {
        if(!(menuBtn.is('.is_active'))) {
          menuBtn.addClass('is_active');
          $('html').css('overflow', 'hidden');
          $('.header__top').addClass('is_active');
        } else {
          menuBtn.removeClass('is_active');
          $('html').css('overflow', 'auto');
          $('.header__top').removeClass('is_active');
        }
      });
    }
  };

  $('.main__menu a').click(function(e) {
    e.preventDefault();
    var cls = $(this).attr('href'),
        top = $(cls).offset().top;

    if(wWidth <= 600) {
      $('.toggle__menu').removeClass('is_active');
      $('.header__top').removeClass('is_active');
      $('html').css('overflow', 'auto');
    }
    $('body, html').animate({scrollTop: top}, 1500);
  });

  $(window).scroll(function() {
    // adaptive fixed menu button
    function fixedMenu() {
      var scrTop = $(window).scrollTop(),
          menuBtn = $('.toggle__menu'),
          menuPos = menuBtn.offset().top;
      if(wWidth <= 870 && menuBtn.is('.is_active') && scrTop > 85) {
        menuBtn.addClass('is_fixed');
      } else {
        menuBtn.removeClass('is_fixed');
      }
    }
    fixedMenu();

    // parallax
    (function myParallax() {

      var scrTop = $(window).scrollTop(),
      sect1offset = $('.mission').offset().top,
      sect2offset = $('.projects').offset().top,
      sect3offset = $('.team').offset().top,
      sect3listOffset = $('.team__list').offset().top,
      sect4offset = $('.event').offset().top;

      function missionParallax() {
        var sect1scrTop = 0;

        if(wWidth >= 1100) {
          sect1scrTop = scrTop - sect1offset + 400;

          if(sect1scrTop > 0 && sect1scrTop <= 800) {
            $('.mission__title, .mission__descr').css({
              'transform' : 'translateY('+ sect1scrTop/4 + '%)'
            });
          }

        }
      }
      missionParallax();

      function projectsParallax() {
        var sect2scrTop = 0;

        if(wWidth >= 1100) {
          sect2scrTop = scrTop - sect2offset + 150;

          if(sect2scrTop > 0) {
            $('.projects__decor').css({
              'transform' : 'translateY(-'+ sect2scrTop/20 + '%)'
            });
            $('.projects__title, .projects__list').css({
              'transform' : 'translateY(-'+ sect2scrTop/25 + '%)'
            });
            // $('.projects__list').css({
            //   'transform' : 'translateY(-'+ sect2scrTop/25 + '%)'
            // });
          }

        }
      }
      projectsParallax();

      function teamParallax() {
        var sect3scrTop = 0,
            sect3listScrTop = 0;

        if(wWidth >= 1100) {
          sect3scrTop = scrTop - sect3offset + 350;
          sect3listScrTop = scrTop - sect3listOffset + 500;
          var firstTeamItem = $('.team__list .team__item:nth-child(-n+2) .team__descr'),
              lastTeamItem = $('.team__list .team__item:nth-child(n+3) .team__descr');

          $('.team__title').css({
            'transform' : 'translateY(-65%)'
          });
          lastTeamItem.css({
            'transform' : 'translateY(-200%)'
          })

          if(sect3scrTop > 0) {
            var teamleadScrTop = sect3scrTop/15 - 35;

            $('.team__title').css({
              'transform' : 'translateY('+ (sect3scrTop/7 - 65) + '%)'
            });
            if(teamleadScrTop > -35 && teamleadScrTop < 30) {
              $('.teamlead__item .team__descr').css({
                'transform' : 'translate(-50%, '+ teamleadScrTop + '%)'
              });
            }
          }
          if(sect3listScrTop > 0) {
            lastTeamItem.css({
              'transform' : 'translateY('+ (sect3listScrTop/7 - 200) + '%)'
            });
            if(sect3listScrTop < 600) {
              firstTeamItem.css({
                'transform' : 'translateY(-'+ sect3listScrTop/3 + '%)'
              });
            }
          }

        }
      }
      teamParallax();

      function eventParallax() {
        var sect4scrTop = 0;

        if(wWidth >=1100) {
          sect4scrTop = scrTop - sect4offset + 300;
          if(sect4scrTop > 0) {
            $('.event__decor').css({
              'top' : sect4scrTop/1.8
            });
            $('.event__descr').css({
              'transform' : 'translateY(' + (sect4scrTop/25 - 50) + '%)'
            });
          }
        }
      }
      eventParallax();

    })();


  });


});
