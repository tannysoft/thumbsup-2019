/* For all custom js codes. */

function showNavbar(params) {
    let x = document.getElementById('subMenu');
    if (x.style.display === "none") {
      x.style.display = "block";
    } else {
      x.style.display = "none";
    }
  }
  function showContent(params) {
    let x = document.getElementById('content-dropdown');
    if (x.style.display !== "none") {
      x.style.display = "block";
      document.getElementById('subMenu').style.backgroundColor = '#494949';
    } else {
      x.style.display = "none";
    }
  }

jQuery(document).ready(function($) {

	// Control buttons
    $('.next').click(function () {
		$('.carousel').carousel('next');
		return false;
	});
	$('.prev').click(function () {
		$('.carousel').carousel('prev');
		return false;
	});

	// On carousel scroll
	$("#myCarousel").on("slide.bs.carousel", function (e) {
		var $e = $(e.relatedTarget);
		var idx = $e.index();
		var itemsPerSlide = 3;
		var totalItems = $(".carousel-item").length;
		if (idx >= totalItems - (itemsPerSlide - 1)) {
		var it = itemsPerSlide -
			(totalItems - idx);
		for (var i = 0; i < it; i++) {
			// append slides to end
			if (e.direction == "left") {
				$(".carousel-item").eq(i).appendTo(".carousel-inner");
			} else {
				$(".carousel-item").eq(0).appendTo(".carousel-inner");
			}
		}
		}
	});

});
