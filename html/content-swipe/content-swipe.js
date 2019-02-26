(function($) {
'use strict';

// http://labs.rampinteractive.co.uk/touchSwipe/demos/index.html
// http://thumbsup.tan.cloud/wp-json/wp/v2/posts/81

var isMobile = /iPhone|iPad|iPod|Android/i.test(navigator.userAgent);

var defaultSettings = {
  target: null,
  navItemsPerPage: 10,
  totalPages: 30,
  navContainer: null,
  container: null,
};

var __contentSwipe = function(newSettings) {
  if (!isMobile) {
    console.log('Don\'t do anything if isn\'t mobile.');
    return;
  }

  console.log('Enable content swipe !');

  var self = this;
  var settings = $.extend({}, defaultSettings, newSettings);

  this.data = {
    id: settings.initContentId,
    content: null,
    previous: null,
    next: null,
  };
  this.currentContentIndex = 0;
  this.busy = false;
  this.navItemsPerPage = settings.navItemsPerPage;
  this.$target = $(settings.target);

  var $wrapElement = $(
    '<div id="content-carousel-wrapper" class="content-carousel-wrapper">' +
      '<div id="content-carousel-nav" class="content-carousel-nav"></div>' +
      '<div id="content-carousel-container" class="content-carousel-container">' +
        '<div class="content-carousel-item current">' +
          '<div class="content-carousel-item-content"></div>' +
        '</div>' +
      '</div>' +
    '</div>'
  );

  $wrapElement.insertAfter(this.$target);
  $wrapElement.find('.content-carousel-item-content').wrapInner(this.$target);

  setTimeout(function() {
    self.$navContainer = $wrapElement.find('#content-carousel-nav');
    self.$container = $wrapElement.find('#content-carousel-container');

    self.fetchAndBuildItem(settings.initContentId);
    self.bindSwipeEvent();
  });
}

__contentSwipe.prototype = {
  fetchAndBuildItem: function(currentId, callback) {
    var self = this;
    var _resp = null;

    $.ajax({
      // url: 'http://thumbsup.tan.cloud/wp-json/wp/v2/posts/' + currentId,
      url: 'http://thumbsup.tan.cloud/index.php?rest_route=/wp/v2/posts/' + currentId,
    })
      .done(function(resp) {
        // console.log(resp);
        // console.log('CurrentID:', currentId, resp);
        _resp = resp

        self.data = {
          id: resp.id,
          content: resp.content.rendered,
          previous: resp.previous,
          next: resp.next,
        };

        self.createNav();
        self.adjustPreviousItem(self.data.previous);
        self.adjustNextItem(self.data.next);
      })
      .fail(function() {
        console.log('Error!, Please try again later');
      })
      .always(function() {
        (callback || $.noop)(_resp);
      })
  },

  bindSwipeEvent: function() {
    var self = this;

    this.$container
      .swipe({
        swipe: function(event, direction, distance, duration, fingerCount, fingerData) {
          if (self.busy) return;

          var swipeAction = function(direction) {
            anime({
              targets: self.$container[0],
              translateX: direction === 'left' ? '-100%' : '100%',
              easing: 'linear',
              duration: 250,
              complete: function() {
                self.afterSlideEnd(direction);
                self.busy = true;
              },
            });
          };


          if (direction === 'left' && $('.content-carousel-item.next').length > 0) {
            swipeAction(direction);
          }
          else if (direction === 'right' && $('.content-carousel-item.prev').length > 0) {
            swipeAction(direction);
          }
        }
      });
  },

  afterSlideEnd: function(direction) {
    var self = this;
    var currentId = null;
    var $prev = this.$container.find('.content-carousel-item.prev');
    var $current = this.$container.find('.content-carousel-item.current');
    var $next = this.$container.find('.content-carousel-item.next');

    if (direction === 'left') {
      $current.removeClass('current').addClass('prev');
      $next.removeClass('next').addClass('current');

      currentId = this.data.next.id;

      // mock content index
      if (this.currentContentIndex === this.navItemsPerPage - 1) {
        this.currentContentIndex = 0;
      }
      else {
        this.currentContentIndex = this.currentContentIndex + 1;
      }
    }
    else if (direction === 'right') {
      $current.removeClass('current').addClass('next');
      $prev.removeClass('prev').addClass('current');

      currentId = this.data.previous.id;

      // mock content index
      if (this.currentContentIndex === 0) {
        this.currentContentIndex = this.navItemsPerPage - 1;
      }
      else {
        this.currentContentIndex = this.currentContentIndex - 1;
      }
    }

    this.$container.addClass('end');
    this.resetContainerPosition();

    var mod = this.currentContentIndex % this.navItemsPerPage;
    if (mod === 0 || mod === this.navItemsPerPage - 1) {
      this.createNav();
    }

    this.setActiveToNavItem(this.currentContentIndex);

    this.fetchAndBuildItem(currentId, function() {
      self.$container.removeClass('end');
      self.busy = false;
    });
  },

  resetContainerPosition: function() {
    this.$container[0].style.transform = 'translateX(0) translateY(0) translateZ(0)';
  },

  createNav: function() {
    // NOTE: Disabled create nav, because we don't have data to calculate pages.
    var start = 0;
    var mod = this.currentContentIndex % this.navItemsPerPage;
    start = this.currentContentIndex - mod;

    var end = start + this.navItemsPerPage;
    end = end > this.totalPages ? this.totalPages : end
    var nav = [];

    for (var index = start; index < end; index++) {
      var className = index === this.currentContentIndex ? 'item active' : 'item';

      nav.push(
        '<li data-index="' + index + '" class="' + className + '">' +
          '<span class="dot"></span>' +
        '</li>'
      );
    }

    this.$navContainer.html('<ul class="list">' + nav.join('') + '</ul>');
  },

  setActiveToNavItem: function(index) {
    this.$navContainer
      .find('[data-index="' + index + '"]')
      .addClass('active')
      .siblings()
      .removeClass('active');
  },

  adjustPreviousItem: function(data) {
    if (!data) { return }

    var self = this;

    $.get('http://localhost:3100/get-content-from-url?url=' + data.link, function(htmlString) {
      var div = document.createElement('div');
      div.innerHTML = htmlString.trim();
      var prevContent = $(div).find('#wrapper-swipe-content').parent().html();

      var $prevItem = self.$container.find('.content-carousel-item.prev');

      // NOTE: For debug
      $prevItem.find('.content-editor:first').prepend(data.content);

      if ($prevItem.length === 0) {
        self.$container.prepend(
          '<div class="content-carousel-item prev">' +
            '<div class="content-carousel-item-content">' +
              prevContent +
            '</div>' +
          '</div>'
        )
      }
      else {
        $prevItem.children().html(prevContent);
      }

      setTimeout(function() {
        if ($prevItem.length > 1) {
          $prevItem.first().remove();
        }
      });
    })
  },

  adjustNextItem: function(data) {
    if (!data) { return }

    var self = this;

    $.get('http://localhost:3100/get-content-from-url?url=' + data.link, function(htmlString) {
      var div = document.createElement('div');
      div.innerHTML = htmlString.trim();
      var nextContent = $(div).find('#wrapper-swipe-content').parent().html();

      var $nextItem = self.$container.find('.content-carousel-item.next');

      // NOTE: For debug
      // console.log($nextItem);
      $nextItem.find('.content-editor:first').prepend(data.content);

      if ($nextItem.length === 0) {
        self.$container.append(
          '<div class="content-carousel-item next">' +
            '<div class="content-carousel-item-content">' +
              nextContent +
            '</div>' +
          '</div>'
        )
      }
      else {
        $nextItem.children().html(nextContent);
      }

      setTimeout(function() {
        if ($nextItem.length > 1) {
          $nextItem.last().remove();
        }
      });
    });
  }
}


window.__contentSwipe = __contentSwipe;

})(jQuery);
