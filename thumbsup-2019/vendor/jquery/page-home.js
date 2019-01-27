jQuery(document).ready(function($) {
  //SWIPER
  // ------------------------------
  var swiperEditor = new Swiper('.swiper-editor', {
    slidesPerView: 3,
    spaceBetween: 20,
    noSwiping: true,
    freeMode: true,
    freeModeSticky: true,
    navigation: {
        nextEl: '.swiper-editor-next',
        prevEl: '.swiper-editor-prev',
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

  var swiperTrend = new Swiper('.swiper-trend', {
    slidesPerView: 3,
    spaceBetween: 20,
    noSwiping: true,
    freeMode: true,
    freeModeSticky: true,
    navigation: {
        nextEl: '.swiper-trend-next',
        prevEl: '.swiper-trend-prev',
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
          swiperEditor.update(true);
          swiperTrend.update(true);
      }, 500);
  }

  window.onorientationchange = function () {
      reinitSwiper();
  };
});