$( document ).ready(function() {
	$('#introSlider').slick({
		arrows: true,
		autoplay: true,
		autoplaySpeed: 4000,
		dots: true
	});
});

$( document ).ready(function() {
	$('.memSlider').slick({
		arrows: true,
		dots: false,
		slidesToShow: 4,
		slidesToScroll: 1,
		prevArrow: '<button class="slick-arrow slick-prev"><i class="fa fa-chevron-left"></i>«</button>',
		nextArrow: '<button class="slick-arrow slick-next"><i class="fa fa-chevron-right"></i>»</button>',
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
});