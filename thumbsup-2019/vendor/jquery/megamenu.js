/* global jQuery */
/* global document */

jQuery(document).ready(function($) {
  'use strict';

  document.addEventListener("touchstart", function() {}, false);
  jQuery(document).ready(function($) {

    $('body').wrapInner('<div class="wsmenucontainer" />');
    $('<div class="overlapblackbg"></div>').prependTo('.wsmenu');

    $('#wsnavtoggle').click(function() {
      $('body').toggleClass('wsactive');
    });

    $('.overlapblackbg').click(function() {
      $("body").removeClass('wsactive');
    });

    //Main Menu Link
    $(".wsmenu>.wsmenu-list>li>a").on('click', function() {
      $(this).parent().toggleClass("wsclickopen").siblings(this).removeClass("wsclickopen");
      $(".wsmenu>.wsmenu-list>li>ul.sub-menu>li").removeClass('wsclickopen-sub');
      $(".wsmenu>.wsmenu-list>li>ul.sub-menu>li>ul.sub-menu>li").removeClass('wsclickopen-sub-sub');
    });

    $(".wsmenu>.wsmenu-list>li>.sub-menu>li>a").on('click', function() {
      $(this).parent().toggleClass("wsclickopen-sub").siblings(this).removeClass("wsclickopen-sub");
    });

    $(".wsmenu>.wsmenu-list>li>ul.sub-menu>li>ul.sub-menu>li>a").on('click', function() {
      $(this).parent().toggleClass("wsclickopen-sub-sub").siblings(this).removeClass("wsclickopen-sub-sub");
    });

    $(".wsmenu>.wsmenu-list>li>ul.sub-menu>li>ul.sub-menu>li>ul.sub-menu>li>a").on('click', function() {
      $(this).parent().toggleClass("wsclickopen-sub-sub-sub").siblings(this).removeClass("wsclickopen-sub-sub-sub");
    });

    $(document).on("click", function(event) {
      var $trigger = $(".wsmegamenu");
      if ($trigger !== event.target && !$trigger.has(event.target).length) {
        $(".wsmenu>.wsmenu-list>li").removeClass("wsclickopen");
      }
    });

    $(".wsmenu>.wsmenu-list>li>a").click(function(e) {
      e.stopPropagation();
    });

    $(".wsmenu>.wsmenu-list>li>.sub-menu>li>a, .wsmenu>.wsmenu-list>li>ul.sub-menu>li>ul.sub-menu>li>a, .wsmenu>.wsmenu-list>li>ul.sub-menu>li>ul.sub-menu>li>ul.sub-menu>li>a").click(function(e) {
      e.stopPropagation();
    });

    $(window).on('resize', function() {
      if ($(window).outerWidth() < 992) {
        $('.wsmenu').css('height', $(this).height() + "px");
        $('.wsmenucontainer').css('min-width', $(this).width() + "px");
      } else {
        $('.wsmenucontainer').removeAttr("style");
        $('.wsmenu').removeAttr("style");
        $('body').removeClass("wsactive");
        $('.wsmenu>.wsmenu-list>li').removeClass("wsclickopen");
        $(".wsmenu>.wsmenu-list>li>ul.sub-menu>li").removeClass('wsclickopen-sub');
        $(".wsmenu>.wsmenu-list>li>ul.sub-menu>li>ul.sub-menu>li").removeClass('wsclickopen-sub-sub');
      }
    });
    $(window).trigger('resize');

    //Mobile Search Box
    $(window).on("load", function() {
      $('.wsmobileheader .wssearch').on("click", function() {
        $(this).toggleClass("wsopensearch");
      });
      $("body, .wsopensearch .fa.fa-times").on("click", function() {
        $(".wssearch").removeClass('wsopensearch');
      });
      $(".wssearch, .wssearchform form").on("click", function(e) {
        e.stopPropagation();
      });
    });

  });

}());