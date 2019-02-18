// Initiate WoW.js animation script
new WOW().init();

// Stickynav
$(document).ready(function() {
	// grab the initial top offset of the navigation 
   	var stickyNavTop = $('.navbar').offset().top;
   	
   	// our function that decides weather the navigation bar should have "fixed" css position or not.
   	var stickyNav = function(){
	    var scrollTop = $(window).scrollTop(); // our current vertical position from the top
	         
	    // if we've scrolled more than the navigation, change its position to fixed to stick to top,
	    // otherwise change it back to relative
	    if (scrollTop > stickyNavTop) { 
	        $('.navbar').addClass('sticky');
	    } else {
	        $('.navbar').removeClass('sticky'); 
	    }
	};

	stickyNav();
	// and run it again every time you scroll
	$(window).scroll(function() {
		stickyNav();
	});
});

// Smooth scrolling CSS-Tricks.com
// Select all links with hashes
$('a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    // On-page links
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
      && 
      location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000, function() {
          // Callback after animation
          // Must change focus!
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) { // Checking if the target was focused
            return false;
          } else {
            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
            $target.focus(); // Set focus again
          };
        });
      }
    }
  });

// $( document ).ready(function() {
// 	$('#introSlider').slick({
// 		arrows: true,
// 		autoplay: true,
// 		autoplaySpeed: 4000,
// 		dots: true
// 	});
// });

$( document ).ready(function() {
	$('.blogFeedHorizSlider').slick({
		arrows: true,
		dots: false,
		slidesToShow: 5,
		slidesToScroll: 1,
		prevArrow: '<button class="slick-arrow slick-prev"><i class="fa fa-chevron-left"></i></button>',
		nextArrow: '<button class="slick-arrow slick-next"><i class="fa fa-chevron-right"></i></button>',
		responsive: [
			{
			  breakpoint: 1024,
			  settings: {
			    slidesToShow: 3,
			    slidesToScroll: 3,
			    infinite: true,
			    dots: true
			  }
			},
			{
			  breakpoint: 600,
			  settings: {
			    slidesToShow: 2,
			    slidesToScroll: 2
			  }
			},
			{
			  breakpoint: 480,
			  settings: {
			    slidesToShow: 1,
			    slidesToScroll: 1
			  }
			}
		]
	});
	$('.memSlider').slick({
		arrows: true,
		dots: false,
		slidesToShow: 3,
		slidesToScroll: 1,
		prevArrow: '<button class="slick-arrow slick-prev"><i class="fa fa-chevron-left"></i></button>',
		nextArrow: '<button class="slick-arrow slick-next"><i class="fa fa-chevron-right"></i></button>',
		responsive: [
			{
			  breakpoint: 1024,
			  settings: {
			    slidesToShow: 3,
			    slidesToScroll: 1,
			    infinite: true,
			    dots: true
			  }
			},
			{
			  breakpoint: 600,
			  settings: {
			    slidesToShow: 2,
			    slidesToScroll: 2
			  }
			},
			{
			  breakpoint: 480,
			  settings: {
			    slidesToShow: 1,
			    slidesToScroll: 1
			  }
			}
		]
	});
	$('.investSlides').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		dots: false,
		asNavFor: '.investSlidesNav'
	});
	$('.investSlidesNav').slick({
		slidesToShow: 3,
		asNavFor: '.investSlides',
		dots: false,
		arrows: false,
		focusOnSelect: true
	});
});
