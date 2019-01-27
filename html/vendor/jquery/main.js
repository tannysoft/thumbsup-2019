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
});