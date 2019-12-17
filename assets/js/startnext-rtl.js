(function($){
	"use strict";
	jQuery(document).on('ready', function () {
		// Feather Icon Js
		feather.replace();

        // Mean Menu
		jQuery('.mean-menu').meanmenu({
			meanScreenWidth: "991"
		});

		
		// Hero Slider
		$('.hero-slider').owlCarousel({
			items: 1,
			loop: true,
			nav: true,
			dots: false,
			mouseDrag: false,
			rtl: true,
			autoplay:true,
			autoplayHoverPause: true,
			autoplayTimeout:4000,
            smartSpeed:1000,
			navText: [
				"<i class='fa fa-angle-left'></i>",
				"<i class='fa fa-angle-right'></i>"
            ],
            responsive:{
                0:{
                    autoHeight:true,
                },
                768:{
                    autoHeight:false,
                }
            }
		});

		$(".hero-slider").on("translate.owl.carousel", function(){
            $(".hosting-main-banner h1, .hosting-main-banner p").removeClass("startnext_animated fadeInUp").css("opacity", "0");
            $(".hosting-main-banner .btn").removeClass("startnext_animated fadeInDown").css("opacity", "0");
            $(".hosting-main-banner .slider-image").removeClass("startnext_animated pulse").css("opacity", "0");
        });
        
        $(".hero-slider").on("translated.owl.carousel", function(){
            $(".hosting-main-banner h1, .hosting-main-banner p").addClass("startnext_animated fadeInUp").css("opacity", "1");
            $(".hosting-main-banner .btn").addClass("startnext_animated fadeInDown").css("opacity", "1");
            $(".hosting-main-banner .slider-image").addClass("startnext_animated pulse").css("opacity", "1");
		});
		
		// Magnific Popup
		$('.popup-youtube').magnificPopup({
			disableOn: 320,
			type: 'iframe',
			mainClass: 'mfp-fade',
			removalDelay: 160,
			preloader: false,
			fixedContentPos: false
		});

		// Header Sticky
		$(window).on('scroll',function() {
            if ($(this).scrollTop() > 120){  
                $('.startp-nav').addClass("is-sticky");
            }
            else{
                $('.startp-nav').removeClass("is-sticky");
            }
		});

        // Popup Gallery
		$('.popup-btn').magnificPopup({
            type: 'image',
            gallery:{
                enabled:true
            }
		});

		// Testimonials Slides
		var owl = $(".testimonials-slides");
		owl.owlCarousel({
			loop: false,
			nav: false,
			dots: true,
			rtl: true,
			autoplay: true,
			smartSpeed: 1000,
			autoplayTimeout: 5000,
			items: 1,
		});

		// Works Slides
		var owl = $('.works-slides');
		owl.owlCarousel({
			loop:true,
			nav:false,
			autoplay: true,
			rtl: true,
			dots:false,
			responsive:{
				0:{
                    items:1,
                },
                768:{
                    items:2,
                },
                1200:{
                    items:3,
                },
                1500:{
                    items:4,
				}
			}
		});
		owl.on('mousewheel', '.owl-stage', function (e) {
			if (e.deltaY>0) {
				owl.trigger('next.owl');
			} else {
				owl.trigger('prev.owl');
			}
			e.preventDefault();
		});

		// Boxes Slides
		var owl = $('.boxes-slides');
		owl.owlCarousel({
			loop:true,
			nav:false,
			rtl: true,
			autoplay: true,
			dots:false,
			responsive:{
				0:{
                    items:1,
                },
                768:{
                    items:2,
                },
                1200:{
                    items:4,
                }
			}
		});
		owl.on('mousewheel', '.owl-stage', function (e) {
			if (e.deltaY>0) {
				owl.trigger('next.owl');
			} else {
				owl.trigger('prev.owl');
			}
			e.preventDefault();
		});

		// Team Slides
		var owl = $(".owl-carousel");
		owl.owlCarousel({
			loop: true,
			nav: false,
			dots: true,
			rtl: true,
			autoplay: false,
			smartSpeed: 1000,
			autoplayTimeout: 5000,
			responsive: {
				0:{
                    items:1,
                },
                768:{
                    items:2,
                },
                1200:{
                    items:4,
				},
                1500:{
                    items:5,
				}
			}
		});

		// Partner Slides
		var owl = $(".partner-slides");
		owl.owlCarousel({
			loop: true,
			nav: false,
			dots: false,
			rtl: true,
			autoplay: true,
			smartSpeed: 1000,
			autoplayTimeout: 5000,
			responsive: {
				0:{
                    items:2,
                },
                768:{
                    items:4,
                },
                1200:{
                    items:6,
				}
			}
		});

		// Feedback Carousel
		var $imagesSlider = $(".feedback-slides .client-feedback>div"),
		$thumbnailsSlider = $(".client-thumbnails>div");
		// images options
		$imagesSlider.slick({
			speed:300,
			slidesToShow:1,
			slidesToScroll:1,
			cssEase:'linear',
			fade:true,
			autoplay: true,
			draggable:true,
			rtl: true,
			asNavFor:".client-thumbnails>div",
			prevArrow:'.client-feedback .prev-arrow',
			nextArrow:'.client-feedback .next-arrow'
		});
		// Thumbnails options
		$thumbnailsSlider.slick({
			speed:300,
			slidesToShow:5,
			slidesToScroll:1,
			cssEase:'linear',
			autoplay: true,
			centerMode:true,
			draggable:false,
			focusOnSelect:true,
			rtl: true,
			asNavFor:".feedback-slides .client-feedback>div",
			prevArrow:'.client-thumbnails .prev-arrow',
			nextArrow:'.client-thumbnails .next-arrow',
		});
		var $caption = $('.feedback-slides .caption');
		var captionText = $('.client-feedback .slick-current img').attr('alt');
		updateCaption(captionText);
		$imagesSlider.on('beforeChange', function(event, slick, currentSlide, nextSlide){
			$caption.addClass('hide');
		});
		$imagesSlider.on('afterChange', function(event, slick, currentSlide, nextSlide){
			captionText = $('.client-feedback .slick-current img').attr('alt');
			updateCaption(captionText);
		});

		function updateCaption(text) {
			// if empty, add a no breaking space
			if (text === '') {
				text = '&nbsp;';
			}
			$caption.html(text);
			$caption.removeClass('hide');
		}
		
		// Go to Top
        $(function(){
            //Scroll event
            $(window).on('scroll', function(){
                var scrolled = $(window).scrollTop();
                if (scrolled > 300) $('.go-top').fadeIn('slow');
                if (scrolled < 300) $('.go-top').fadeOut('slow');
            });  
            //Click event
            $('.go-top').on('click', function() {
                $("html, body").animate({ scrollTop: "0" },  500);
            });
		});
		
		// FAQ Accordion
        $(function() {
            $('.accordion').find('.accordion-title').on('click', function(){
                // Adds Active Class
                $(this).toggleClass('active');
                // Expand or Collapse This Panel
                $(this).next().slideToggle('fast');
                // Hide The Other Panels
                $('.accordion-content').not($(this).next()).slideUp('fast');
                // Removes Active Class From Other Titles
                $('.accordion-title').not($(this)).removeClass('active');		
            });
        });
	});
	
	$(window).on ('load', function (){
        // WOW JS
        if ($(".wow").length) { 
            var wow = new WOW({
            boxClass:     'wow',      // startnext_animated element css class (default is wow)
            animateClass: 'startnext_animated', // animation css class (default is startnext_animated)
            offset:       20,          // distance to the element when triggering the animation (default is 0)
            mobile:       true,       // trigger animations on mobile devices (default is true)
            live:         true,       // act on asynchronously loaded content (default is true)
          });
          wow.init();
        }
	});

	jQuery(document).on('ready', function() {
		$('.odometer').appear(function(e) {
			var odo = $(".odometer");
			odo.each(function() {
				var countNumber = $(this).attr("data-count");
				$(this).html(countNumber);
			});
		});
	});
	
	// Preloader Area
	jQuery(window).on('load', function() {
		$('.preloader').fadeOut();
	});

	$( window ).on( 'elementor/frontend/init', function() {
		elementorFrontend.hooks.addAction( 'frontend/element_ready/StartNext_Team.default', function($scope, $){
			// Team Slides
			var owl = $(".team-slider");
			owl.owlCarousel({
				loop: true,
				nav: false,
				dots: true,
				autoplay: false,
				rtl: true,
				smartSpeed: 1000,
				autoplayTimeout: 5000,
				responsive: {
					0:{
						items:1,
					},
					768:{
						items:2,
					},
					1200:{
						items:4,
					},
					1500:{
						items:5,
					}
				}
			});
		});
	});

	$( window ).on( 'elementor/frontend/init', function() {
		elementorFrontend.hooks.addAction( 'frontend/element_ready/StartNext_Banner_One.default', function($scope, $){
			$(window).on ('load', function (){
				// WOW JS
				if ($(".wow").length) { 
					var wow = new WOW({
					boxClass:     'wow',      // startnext_animated element css class (default is wow)
					animateClass: 'startnext_animated', // animation css class (default is startnext_animated)
					offset:       20,          // distance to the element when triggering the animation (default is 0)
					mobile:       true,       // trigger animations on mobile devices (default is true)
					live:         true,       // act on asynchronously loaded content (default is true)
				});
				wow.init();
				}
			});
		});
	});

	// Boxes Slides
	$( window ).on( 'elementor/frontend/init', function() {
		elementorFrontend.hooks.addAction( 'frontend/element_ready/Features_Box.default', function($scope, $){
			var owl = $('.boxes-slides');
			owl.owlCarousel({
				loop:true,
				nav:false,
				rtl: true,
				autoplay: true,
				dots:false,
				responsive:{
					0:{
						items:1,
					},
					768:{
						items:2,
					},
					1200:{
						items:4,
					}
				}
			});
	
		});
	});

}(jQuery));