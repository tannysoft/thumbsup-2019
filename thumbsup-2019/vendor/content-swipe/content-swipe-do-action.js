(function($) {
'use strict';

new window.__contentSwipe({
  target: '#wrapper-swipe-content',
  initContentId: $('body').data('init-content-id') || 56,
  navItemsPerPage: 10,
  totalPages: 30,
  devMode: false,
});

})(jQuery);