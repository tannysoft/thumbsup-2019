(function($) {
'use strict';

// http://labs.rampinteractive.co.uk/touchSwipe/demos/index.html
// http://thumbsup.tan.cloud/wp-json/wp/v2/posts/81

var totalPages = 30;

var __data = {
  id: 56,
  content: null,
  previous: null,
  next: null,
};
var currentContentIndex = 0;
var navItemsPerPage = 10;
var busy = false;
var $nav = $('#content-carousel-nav');
var $container = $('#content-carousel-container');

var fetchAndBuildItem = function(currentId, callback) {
  var _resp = null

  $.ajax({
    // url: 'http://thumbsup.tan.cloud/wp-json/wp/v2/posts/' + currentId,
    url: 'http://thumbsup.tan.cloud/index.php?rest_route=/wp/v2/posts/' + currentId,
  })
    .done(function(resp) {
      // console.log(resp);
      // console.log('CurrentID:', currentId, resp);
      _resp = resp

      __data = {
        id: resp.id,
        content: resp.content.rendered,
        previous: resp.previous,
        next: resp.next,
      };

      createNav();
      adjustPreviousItem(__data.previous);
      adjustNextItem(__data.next);
    })
    .fail(function() {
      console.log('Error!, Please try again later');
    })
    .always(function() {
      (callback || $.noop)(_resp);
    })
}

// first fetch for prepare data
fetchAndBuildItem(__data.id);

$container
  .swipe({
    swipe: function(event, direction, distance, duration, fingerCount, fingerData) {
      if (busy) return;

      var swipeAction = function(direction) {
        anime({
          targets: $container[0],
          translateX: direction === 'left' ? '-100%' : '100%',
          easing: 'linear',
          duration: 250,
          complete: function() {
            afterSlideEnd(direction);
            busy = true;
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

function afterSlideEnd(direction) {
  var currentId = null;
  var $prev = $container.find('.content-carousel-item.prev');
  var $current = $container.find('.content-carousel-item.current');
  var $next = $container.find('.content-carousel-item.next');

  if (direction === 'left') {
    $current.removeClass('current').addClass('prev');
    $next.removeClass('next').addClass('current');

    currentId = __data.next.id;

    // mock content index
    if (currentContentIndex === navItemsPerPage - 1) {
      currentContentIndex = 0;
    }
    else {
      currentContentIndex = currentContentIndex + 1;
    }
  }
  else if (direction === 'right') {
    $current.removeClass('current').addClass('next');
    $prev.removeClass('prev').addClass('current');

    currentId = __data.previous.id;

    // mock content index
    if (currentContentIndex === 0) {
      currentContentIndex = navItemsPerPage - 1;
    }
    else {
      currentContentIndex = currentContentIndex - 1;
    }
  }

  $container.addClass('end');
  resetContainerPosition();

  var mod = currentContentIndex % navItemsPerPage;
  if (mod === 0 || mod === navItemsPerPage - 1) {
    createNav();
  }

  setActiveToNavItem(currentContentIndex);

  fetchAndBuildItem(currentId, function() {
    $container.removeClass('end');
    busy = false;
  });
}

function resetContainerPosition() {
  $container[0].style.transform = 'translateX(0) translateY(0) translateZ(0)';
}

function createNav() {
  // NOTE: Disabled create nav, because we don't have data to calculate pages.
  var start = 0;
  var mod = currentContentIndex % navItemsPerPage;
  start = currentContentIndex - mod;

  var end = start + navItemsPerPage;
  end = end > totalPages ? totalPages : end
  var nav = [];

  for (var index = start; index < end; index++) {
    var className = index === currentContentIndex ? 'item active' : 'item';

    nav.push(
      '<li data-index="' + index + '" class="' + className + '">' +
        '<span class="dot"></span>' +
      '</li>'
    );
  }

  $nav.html('<ul class="list">' + nav.join('') + '</ul>');
}

function setActiveToNavItem(index) {
  $nav
    .find('[data-index="' + index + '"]')
    .addClass('active')
    .siblings()
    .removeClass('active');
}

function adjustPreviousItem(data) {
  if (!data) { return }

  $.get('http://localhost:3100/get-content-from-url?url=' + data.link, function(htmlString) {
    var div = document.createElement('div');
    div.innerHTML = htmlString.trim();
    var prevContent = $(div).find('#wrapper-swipe-content').parent().html();

    var $prevItem = $container.find('.content-carousel-item.prev');

    // NOTE: For debug
    $prevItem.find('.content-editor:first').prepend(data.content);

    if ($prevItem.length === 0) {
      $container.prepend(
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
}

function adjustNextItem(data) {
  if (!data) { return }

  $.get('http://localhost:3100/get-content-from-url?url=' + data.link, function(htmlString) {
    var div = document.createElement('div');
    div.innerHTML = htmlString.trim();
    var nextContent = $(div).find('#wrapper-swipe-content').parent().html();

    var $nextItem = $container.find('.content-carousel-item.next');

    // NOTE: For debug
    // console.log($nextItem);
    $nextItem.find('.content-editor:first').prepend(data.content);

    if ($nextItem.length === 0) {
      $container.append(
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

})(jQuery);
