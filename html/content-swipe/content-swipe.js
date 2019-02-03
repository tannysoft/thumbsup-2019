(function($) {
'use strict';

// http://labs.rampinteractive.co.uk/touchSwipe/demos/index.html

// create mockup data
var createMockContent = function(n) {
  var content = [String.fromCharCode(n)];
  for (var i = 1; i <= 30; i++) {
    content.push('- ' + i + ' -');
  }

  return content.join('<br />');
}

var __data = [];

for (var i = 65; i <= 80; i++) {
  __data.push(createMockContent(i));
}

var currentContentIndex = 0;
var navItemsPerPage = 10;
var busy = false;
var latestDirection = null;
var $nav = $('#content-carousel-nav');
var $container = $('#content-carousel-container');

createNav();
adjustPreviousItem();
adjustNextItem();

$container
  .swipe({
    swipe: function(event, direction, distance, duration, fingerCount, fingerData) {
      if (busy) return;
      latestDirection = direction;

      if (direction === 'left' && currentContentIndex < __data.length - 1) {
        containerSlideTo(direction);
        currentContentIndex += 1;
        busy = true;
      }
      else if (direction === 'right' && currentContentIndex > 0) {
        containerSlideTo(direction);
        currentContentIndex -= 1;
        busy = true;
      }

      $('#debug').html(currentContentIndex)
    }
  })
  .on('transitionend webkitTransitionEnd oTransitionEnd', function() {
    var $prev = $container.find('.content-carousel-item.prev');
    var $current = $container.find('.content-carousel-item.current');
    var $next = $container.find('.content-carousel-item.next');

    if (latestDirection === 'left') {
      $current.removeClass('current').addClass('prev');
      $next.removeClass('next').addClass('current');
    }
    else if (latestDirection === 'right') {
      $current.removeClass('current').addClass('next');
      $prev.removeClass('prev').addClass('current');
    }

    $container.addClass('end');
    resetContainerPosition();

    var mod = currentContentIndex % navItemsPerPage;
    if (mod === 0 || mod === navItemsPerPage - 1) {
      createNav();
    }
    setActiveToNavItem(currentContentIndex);

    setTimeout(function() {
      $container.removeClass('end')
      adjustPreviousItem();
      adjustNextItem();
      busy = false;
    }, 100);
  });

function containerSlideTo(direction) {
  if (direction === 'left') {
    $container[0].style.transform = 'translateX(-100%) translateY(0) translateZ(0)';
  }
  else if (direction === 'right') {
    $container[0].style.transform = 'translateX(100%) translateY(0) translateZ(0)';
  }
}

function resetContainerPosition() {
  $container[0].style.transform = 'translateX(0) translateY(0) translateZ(0)';
}

function createNav() {
  var start = 0;
  var mod = currentContentIndex % navItemsPerPage;
  start = currentContentIndex - mod;

  var end = start + navItemsPerPage;
  end = end > __data.length ? __data.length : end
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

function adjustPreviousItem() {
  if (currentContentIndex === 0) return;

  var previousData = __data[currentContentIndex - 1]
  var $prevItem = $container.find('.content-carousel-item.prev');

  if ($prevItem.length === 0) {
    $container.prepend(
      '<div class="content-carousel-item prev">' +
        '<div class="content-carousel-item-content">' +
          previousData +
        '</div>' +
      '</div>'
    )
  }
  else {
    $prevItem.children().html(previousData);
  }

  setTimeout(function() {
    if ($prevItem.length > 1) {
      $prevItem.first().remove();
    }
  });
}

function adjustNextItem() {
  if (currentContentIndex === __data.length - 1) return;

  var nextData = __data[currentContentIndex + 1];
  var $nextItem = $container.find('.content-carousel-item.next');

  if ($nextItem.length === 0) {
    $container.append(
      '<div class="content-carousel-item next">' +
        '<div class="content-carousel-item-content">' +
          nextData +
        '</div>' +
      '</div>'
    )
  }
  else {
    $nextItem.children().html(nextData);
  }

  setTimeout(function() {
    if ($nextItem.length > 1) {
      $nextItem.last().remove();
    }
  });
}

})(jQuery);
