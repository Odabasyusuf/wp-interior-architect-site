(function ($) {
"use strict";

	$(window).on('load', function () {
		$('#preloader').delay(350).fadeOut('slow');
		$('body').delay(350).css({ 'overflow': 'visible' });
	})

	// data - background
	$("[data-background]").each(function () {
		$(this).css("background-image", "url(" + $(this).attr("data-background") + ")")
	})

	$('.info-bar').on('click', function () {
		$('.extra-info').addClass('info-open');
	})

	$('.close-icon').on('click', function () {
		$('.extra-info').removeClass('info-open');
	})

	$('.header-bottom-search > a').on('click', function (event) {
		event.preventDefault();
		$('.search-area').addClass('active');
	});

	$('.search-close').on('click', function (event) {
		event.preventDefault();
		$('.search-area').removeClass('active');
	});


    // meanmenu
    jQuery('#mobile-menu').meanmenu({
		meanMenuContainer: '.mobile-menu',
		meanScreenWidth: "1199"
    });

	// slider - active
	function mainSlider() {
		var BasicSlider = $('.slider-active');

		BasicSlider.on('init', function (e, slick) {
			var $firstAnimatingElements = $('.single-slider:first-child').find('[data-animation]');
			doAnimations($firstAnimatingElements);
		});

		BasicSlider.on('beforeChange', function (e, slick, currentSlide, nextSlide) {
			var $animatingElements = $('.single-slider[data-slick-index="' + nextSlide + '"]').find('[data-animation]');
			doAnimations($animatingElements);
		});

		BasicSlider.slick({
			autoplay: true,
			autoplaySpeed: 5000,
			dots: true,
			fade: true,
			arrows: true,
			prevArrow: '<i class="far fa-chevron-left"></i>',
			nextArrow: '<i class="far fa-chevron-right"></i>',
			responsive: [{
						breakpoint: 992,
						settings: {
							arrows: false,
						}
					},
			],
		});

		function doAnimations(elements) {
			var animationEndEvents = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
			elements.each(function () {
				var $this = $(this);
				var $animationDelay = $this.data('delay');
				var $animationType = 'animated ' + $this.data('animation');
				$this.css({
					'animation-delay': $animationDelay,
					'-webkit-animation-delay': $animationDelay
				});
				$this.addClass($animationType).one(animationEndEvents, function () {
					$this.removeClass($animationType);
				});
			});
		}
	}
	mainSlider();

	// service-active slider
    $('.service-active').slick({
		dots: true,
		arrows: true,
		prevArrow: '<i class="far fa-long-arrow-left"></i>',
		nextArrow: '<i class="far fa-long-arrow-right"></i>',
		infinite: true,
		speed: 300,
		slidesToShow: 3,
		slidesToScroll: 1,
		responsive: [{
				breakpoint: 1200,
				settings: {
					slidesToShow: 2,
				}
			},
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 1,
					arrows: false,
				}
			},
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 1,
					arrows: false,
				}
			}
		]
    });

	// product-active slider
	$('.product-active').slick({
		dots: true,
		arrows: true,
		prevArrow: '<i class="far fa-long-arrow-left"></i>',
		nextArrow: '<i class="far fa-long-arrow-right"></i>',
		infinite: true,
		speed: 300,
		slidesToShow: 4,
		slidesToScroll: 1,
		responsive: [{
			breakpoint: 1200,
				settings: {
					slidesToShow: 3,
				}
			},
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 1,
					arrows: false,
				}
			},
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 1,
					arrows: false,
				}
			}
		]
	});

	// shop-active slider
    $('.shop-active').slick({
		dots: true,
		arrows: true,
		prevArrow: '<i class="far fa-long-arrow-left"></i>',
		nextArrow: '<i class="far fa-long-arrow-right"></i>',
		infinite: true,
		speed: 300,
		slidesToShow: 4,
		slidesToScroll: 1,
		responsive: [{
				breakpoint: 1200,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 1,
					infinite: true,
					dots: true
				}
			},
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 1,
				}
			},
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 1,
					arrows: false,
				}
			}
		]
	});

	// team-active slider
	$('.team-active').slick({
		dots: false,
		arrows: true,
		prevArrow: '<i class="far fa-long-arrow-left"></i>',
		nextArrow: '<i class="far fa-long-arrow-right"></i>',
		infinite: true,
		speed: 300,
		slidesToShow: 4,
		slidesToScroll: 1,
		responsive: [
		{
			breakpoint: 1199,
			settings: {
				slidesToShow: 3,
				slidesToScroll: 1,
			}
		},
		{
			breakpoint: 992,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 1,
			}
		},
		{
			breakpoint: 768,
			settings: {
				slidesToShow: 1,
				arrows: false,
			}
		}
		]
	});

	// testimonial-active slider
	$('.testimonial-active').slick({
		dots: true,
		arrows: true,
		prevArrow: '<i class="far fa-long-arrow-left"></i>',
		nextArrow: '<i class="far fa-long-arrow-right"></i>',
		infinite: true,
		speed: 300,
		slidesToShow: 3,
		slidesToScroll: 1,
		responsive: [
		{
			breakpoint: 1199,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 1,
			}
		},
		{
			breakpoint: 991,
			settings: {
				slidesToShow: 1,
				arrows: false,
			}
		}
		]
	});

	// testimonial-active-2 slider
	$('.testimonial-active-2').slick({
		dots: false,
		arrows: true,
		prevArrow: '<i class="far fa-long-arrow-left"></i>',
		nextArrow: '<i class="far fa-long-arrow-right"></i>',
		infinite: true,
		speed: 300,
		slidesToShow: 1,
		slidesToScroll: 1,
		responsive: [
		{
			breakpoint: 768,
			settings: {
				slidesToShow: 1,
				arrows: false,
			}
		}
		]
	});

	// testimonial-active-3 slider
	$('.testimonial-active-3').slick({
		dots: false,
		arrows: true,
		prevArrow: '<i class="far fa-long-arrow-left"></i>',
		nextArrow: '<i class="far fa-long-arrow-right"></i>',
		infinite: true,
		speed: 300,
		slidesToShow: 3,
		slidesToScroll: 1,
		responsive: [
		{
			breakpoint: 1200,
			settings: {
				slidesToShow: 2,
				arrows: false,
			}
		},
		{
			breakpoint: 768,
			settings: {
				slidesToShow: 1,
				arrows: false,
			}
		}
		]
	});

	// client-logo slider
	$('.client-logo-wrapper').slick({
		dots: false,
		arrows: false,
		infinite: true,
		speed: 300,
		slidesToShow: 6,
		slidesToScroll: 1,
		responsive: [
		{
			breakpoint: 992,
			settings: {
				slidesToShow: 4,
				slidesToScroll: 1,
			}
		},
		{
			breakpoint: 768,
			settings: {
				slidesToShow: 3,
				arrows: false,
			}
		},
		{
			breakpoint: 575,
			settings: {
				slidesToShow: 2,
				arrows: false,
			}
		}
		]
	});

	// client-logo slider
	$('.footer-gallery-ul').slick({
		dots: false,
		arrows: false,
		infinite: true,
		speed: 300,
		slidesToShow: 5,
		slidesToScroll: 1,
		responsive: [
		{
			breakpoint: 1200,
			settings: {
				slidesToShow: 4,
				slidesToScroll: 1,
			}
		},
		{
			breakpoint: 992,
			settings: {
				slidesToShow: 5,
				slidesToScroll: 1,
			}
		},
		{
			breakpoint: 768,
			settings: {
				slidesToShow: 3,
				arrows: false,
			}
		},
		{
			breakpoint: 575,
			settings: {
				slidesToShow: 2,
				arrows: false,
			}
		}
		]
	});


	$('#demo-pie-1').pieChart({
		barColor: '#4eae4a',
		barWidth: 10,
		trackColor: '#b8dfb7',
		lineCap: 'round',
		lineWidth: 5,
		onStep: function (from, to, percent) {
			$(this.element).find('.pie-value').text(Math.round(percent) + '%');
		}
	});

	//Scroll top
	$(".scroll-top").on('click',function () {
		$("html,body").animate({ scrollTop: 0 }, 1000);
	});
	$(window).on('scroll',function () {
		if ($(this).scrollTop() > 180) { $(".scroll-top").fadeIn(); }
		else {
			$(".scroll-top").fadeOut();
		}
	});

	/* magnificPopup img view */
	$('.popup-img').magnificPopup({
		type: 'image',
	});

    // counterUp
    $('.counter').counterUp({
		delay: 100,
		time: 2000
	});


	/* magnificPopup video view */
	$('.video-popup').magnificPopup({
		type: 'iframe'
	});




	// portfolio active
	$('.grid').imagesLoaded(function () {
	var grid = $('.grid').isotope({
		itemSelector: '.grid-item',
		percentPosition: true,
		masonry: {
			// use outer width of grid-sizer for columnWidth
			columnWidth: '.grid-item'
		}
	});
		$('.gallery-menu').on('click', 'button', function () {
			var filterValue = $(this).attr('data-filter');
			grid.isotope({
				filter: filterValue
			});
		});


	});



	//for portfolio menu active class
	$('.gallery-menu button').on('click', function (event) {
		$(this).siblings('.active').removeClass('active');
		$(this).addClass('active');
		event.preventDefault();
	});

	//for intro-counter-box active class
	$('.intro-counter-box').on('mouseover', function (event) {
		$(this).siblings('.active').removeClass('active');
		$(this).addClass('active');
		event.preventDefault();
	});

	//Countdown
	$('#countdown-example').countdown({
		date: '03/24/2020 23:59:59',
		days: 'DAYS',
		hours: 'HOUR',
		minutes: 'MINS',
		seconds: 'SECS'
	});

	// // price-range
	// var slider = document.getElementById("myRange");
	// var output = document.getElementById("demo");
	// output.innerHTML = slider.value; // Display the default slider value

	// // Update the current slider value (each time you drag the slider handle)
	// slider.oninput = function () {
	// 	output.innerHTML = this.value;
	// }


	// map
	function basicmap() {
		// Basic options for a simple Google Map
		// For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
		var mapOptions = {
			// How zoomed in you want the map to start at (always required)
			zoom: 11,
			scrollwheel: false,
			// The latitude and longitude to center the map (always required)
			center: new google.maps.LatLng(40.6700, -73.9400), // New York
			// This is where you would paste any style found on Snazzy Maps.
			styles: [{ "featureType": "all", "elementType": "geometry.fill", "stylers": [{ "weight": "2.00" }] }, { "featureType": "all", "elementType": "geometry.stroke", "stylers": [{ "color": "#9c9c9c" }] }, { "featureType": "all", "elementType": "labels.text", "stylers": [{ "visibility": "on" }] }, { "featureType": "landscape", "elementType": "all", "stylers": [{ "color": "#f2f2f2" }] }, { "featureType": "landscape", "elementType": "geometry.fill", "stylers": [{ "color": "#ffffff" }] }, { "featureType": "landscape.man_made", "elementType": "geometry.fill", "stylers": [{ "color": "#ffffff" }] }, { "featureType": "poi", "elementType": "all", "stylers": [{ "visibility": "off" }] }, { "featureType": "road", "elementType": "all", "stylers": [{ "saturation": -100 }, { "lightness": 45 }] }, { "featureType": "road", "elementType": "geometry.fill", "stylers": [{ "color": "#eeeeee" }] }, { "featureType": "road", "elementType": "labels.text.fill", "stylers": [{ "color": "#7b7b7b" }] }, { "featureType": "road", "elementType": "labels.text.stroke", "stylers": [{ "color": "#ffffff" }] }, { "featureType": "road.highway", "elementType": "all", "stylers": [{ "visibility": "simplified" }] }, { "featureType": "road.arterial", "elementType": "labels.icon", "stylers": [{ "visibility": "off" }] }, { "featureType": "transit", "elementType": "all", "stylers": [{ "visibility": "off" }] }, { "featureType": "water", "elementType": "all", "stylers": [{ "color": "#46bcec" }, { "visibility": "on" }] }, { "featureType": "water", "elementType": "geometry.fill", "stylers": [{ "color": "#c8d7d4" }] }, { "featureType": "water", "elementType": "labels.text.fill", "stylers": [{ "color": "#070707" }] }, { "featureType": "water", "elementType": "labels.text.stroke", "stylers": [{ "color": "#ffffff" }] }]
		};
		// Get the HTML DOM element that will contain your map
		// We are using a div with id="map" seen below in the <body>
		var mapElement = document.getElementById('map');

		// Create the Google Map using our element and options defined above
		var map = new google.maps.Map(mapElement, mapOptions);

		// Let's also add a marker while we're at it
		var marker = new google.maps.Marker({
			position: new google.maps.LatLng(40.6700, -73.9400),
			map: map,
			title: 'Cryptox'
		});
	}
	if ($('#map').length != 0) {
		google.maps.event.addDomListener(window, 'load', basicmap);
	}




})(jQuery);