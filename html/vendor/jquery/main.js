$(document).ready(function() {




  $("._card .info .title a").hover(function () {
    $(this).closest('._card').find('.img-photo').css('transform', 'scale(1.06)');
  }, function () {
    $(this).closest('._card').find('.img-photo').css('transform', '');
  });


  $('.insert-dotdotdot').dotdotdot({
    ellipsis: '...', /* The HTML to add as ellipsis. */
    wrap: 'letter', /* How to cut off the text/html: 'word'/'letter'/'children' */
    watch: true /* Whether to update the ellipsis: true/'window' */
  });


  $('.header-sticky').stickyNavbar({
    startAt: 60,
    mobile: true,
    zindex: 99
  });

  $('.menu-sticky').stickyNavbar({
    startAt: 0,
    mobile: true,
    zindex: 999
  });

  // menu mobile
  $('#wstoggle').on('click', function() {
    $('body').toggleClass('wsfopen');
    return false;
  });

  var swiperNews = new Swiper('.swiper-news', {
    slidesPerView: 3,
    spaceBetween: 20,
    noSwiping: true,
    freeMode: true,
    freeModeSticky: true,
    navigation: {
        nextEl: '.swiper-news-next',
        prevEl: '.swiper-news-prev',
    },

    breakpoints: {
      // when window width is <= 1199px
      1199: {
          slidesPerView: 3,
          noSwiping: false,
      },
      991: {
          slidesPerView: 3,
          noSwiping: false,
      },
      767: {
          slidesPerView: 2,
          noSwiping: false
      },
      576: {
          slidesPerView: 'auto',
          noSwiping: false,
      },
    }
  });

  function reinitSwiper() {
      setTimeout(function () {
          swiperNews.update(true);
      }, 500);
  }

  window.onorientationchange = function () {
      reinitSwiper();
  };

});