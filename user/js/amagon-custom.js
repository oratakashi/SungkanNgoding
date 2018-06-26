	/* ==============================================
	Revolution Slider Plugin
	=============================================== */
	$(window).bind("load", function() {
		$(function(){
			
		'use strict';
			$("#pageloader").delay(1200).fadeOut("slow");
	    	$(".loader-item").delay(700).fadeOut();
		
			var container = jQuery('#bloglist');
			container.masonry({
				layoutMode: 'fitRows'
			});
		});
	});
	
	
	/* ==============================================
	Main Navigation Dropdown Menu
	=============================================== */	
	
	$(window).bind("load", function() {
		'use strict';
			
			$('#portfolio-container').mixItUp({
				animation: {
					effects: 'fade rotateX(-10deg)',
					easing: 'cubic-bezier(0.175, 0.885, 0.32, 1.275)',
					perspectiveOrigin: '0 50%',
					perspectiveDistance: '1000px',
					animateChangeLayout: true,
				}
			});
			
			$('#portfolio-single').flexslider({
				animation: "slide",
				controlNav: false,
				smoothHeight: true,
				directionNav: true,
				easing: 'easeInOutBack',
				
				useCSS: false,				
				controlsContainer: ".flex-container",
				before: function(){
					$('.flex-caption').animate({'left':'0px','opacity':'0'},0,'easeOutBack'); 
				},
				after: function(){
					$('.flex-caption').animate({'left':'50px','opacity':'1'},800,'easeOutBack'); 
				},				
			});
			
			
			$('#testimonial-slider').flexslider({
				animation: "slide",
				controlNav: true,
				smoothHeight: true,
				directionNav: false,
				easing: 'easeInOutBack',
				useCSS: false,
			});
			
			$('.header-cart .relative').hoverIntent({
				over: function() {
					$(this).children('.cart-items').slideDown(300);
				},
				out: function() {
					$(this).children('.cart-items').slideUp(300);
				}
			});
			$('.js-selectable-dropdown').on('click', '.js-possibilities a', function (ev) {
				if( "#" === $(this).attr('href') ) {
					ev.preventDefault();
					var parent = $(this).parents('.js-selectable-dropdown');
					parent.find('.js-change-text').html($(this).html());
				}
			});
			
			$().jetmenu({
                indicator: true,
                speed: 600,

           });
			
			$(".panel a").click(function(e){
				e.preventDefault();
				var style = $(this).attr("class");
				$(".jetmenu").removeAttr("class").addClass("jetmenu").addClass(style);
			});			
			
	});
	
	
	
	
	
	/* ==============================================
	Owl Carousel
	=============================================== */
	$(document).ready(function () {
		
		'use strict';
		
			/* Portfolio Slider */
			$("#portfolio-slider").owlCarousel({
				items : 3, //10 items above 1000px browser width
				itemsDesktop : [1000,2], //5 items between 1000px and 901px
				itemsDesktopSmall : [900,2], // betweem 900px and 601px
				itemsTablet: [600,1], //2 items between 600 and 0;
				itemsMobile : false, // itemsMobile disabled - inherit from itemsTablet option
				autoPlay: true,
				navigation: true,
				responsive: true,
				pagination : false,
				stopOnHover: true,
				navigationText : ["",""],
			});
			
			$(".featured-product").owlCarousel({
				items : 4, //10 items above 1000px browser width
				itemsDesktop : [1000,1], //5 items between 1000px and 901px
				itemsDesktopSmall : [900,2], // betweem 900px and 601px
				itemsTablet: [600,1], //2 items between 600 and 0;
				itemsMobile : false, // itemsMobile disabled - inherit from itemsTablet option
				autoPlay: true,
				navigation: true,
				responsive: true,
				pagination : false,
				stopOnHover: true,
				navigationText : ["",""],
			});
			$(".related-product").owlCarousel({
				items : 3, //10 items above 1000px browser width
				itemsDesktop : [1000,1], //5 items between 1000px and 901px
				itemsDesktopSmall : [900,2], // betweem 900px and 601px
				itemsTablet: [600,1], //2 items between 600 and 0;
				itemsMobile : false, // itemsMobile disabled - inherit from itemsTablet option
				autoPlay: true,
				navigation: true,
				responsive: true,
				pagination : false,
				stopOnHover: true,
				navigationText : ["",""],
			});
			
			/* Clients Slider */
			$("#client-slider").owlCarousel({
				items : 4, //10 items above 1000px browser width
				itemsDesktop : [1000,2], //5 items between 1000px and 901px
				itemsDesktopSmall : [900,2], // betweem 900px and 601px
				itemsTablet: [600,1], //2 items between 600 and 0;
				itemsMobile : false, // itemsMobile disabled - inherit from itemsTablet option
				autoPlay: true,
				navigation: false,
				responsive: true,
				pagination : true,
				stopOnHover: true,
				navigationText : ["",""],
			});
	});
	
	
	/* ==============================================
	Parallax Scrolling
	=============================================== */

	$(window).bind("load", function() {
		
		'use strict';
		
		$.stellar({
			responsive: true,
			horizontalScrolling: false,
			verticalOffset: 40
		});
	});
	
	/* ==============================================
	Animated Skills Bar
	=============================================== */

	$(document).ready(function () {
		
		'use strict';

		jQuery(function() {	
			jQuery('.skillbar').appear(function() {
				jQuery('.skillbar').each(function(){
					jQuery(this).find('.skillbar-bar').animate({
						width:jQuery(this).attr('data-percent')
					},1000);
				});
			});
		});
	});
	
	
	/* ==============================================
	Custom Javascript For Different Effects
	=============================================== */
	
	$(document).ready(function () {
		
		'use strict';
		
		
		/* Fancybox Lightbox */
		$(".fancybox").fancybox({
			helpers: {
				overlay: {
					locked: false, // try changing to true and scrolling around the page
					title: {
						type: 'outside'
					},
					thumbs: {
						width: 50,
						height: 50
					}
				}
			}
		});
		
		/* Responsive Videos */
		$(".media.video").fitVids();
		
		/* Twitter Feed */
		$(".tweet-stream").tweet({
			username: "envato",
			modpath: "twitter/",
			count: 2,
			template: "{text}{time}",
			loading_text: "loading twitter feed..."
		});
		
		/* Flickr Photostream */
		if ($.fn.jflickrfeed) $(".flickr-stream ul").jflickrfeed({
			qstrings: {
				id: "52617155@N08"
			},
			limit: 12,
			itemTemplate: '<li><a href="{{link}}" title="{{title}}" target="_blank"><img src="{{image_s}}" alt="{{title}}" /></a></li>'
		});
		
		/* hide #back-top first */
		$("#back-top").hide();		
		// fade in #back-top
		$(function () {
			$(window).scroll(function () {
				if ($(this).scrollTop() > 100) {
					$('#back-top').fadeIn();
				} else {
					$('#back-top').fadeOut();
				}
			});	
			// scroll body to 0px on click
			$('#back-top a').click(function () {
				$('body,html').animate({
					scrollTop: 0
				}, 800);
				return false;
			});
		});	
		
		
		/* Conter */
		$('.counter').counterUp({
            delay: 10,
            time: 1000
        });
		
		/* Tooltip */
		$('.team-social ul li a, .demo-button a, .portfolio-buttons a, .social-icons ul li a').tooltip({
			placement: 'top',
			animation:true,
			delay: { show: 200, hide: 100 }
		});
		
		
		/* Placeholder For IE */
		$('input[placeholder]').each(function(){
			var $placeInput = $(this);			
			if( 'placeholder' in document.createElement('input') ) {
				var placeholder = true;
			}
			else {
				var placeholder = false;
				$placeInput.val( $placeInput.attr('placeholder') );
			}			
			if( !placeholder ) {
				$placeInput.focusin(function(){
					if( $placeInput.val() === $placeInput.attr('placeholder') ) {				
						$placeInput.val('');				
					}
				})
				.focusout(function(){
					if( $placeInput.val() === '' ) {
						$placeInput.val( $placeInput.attr('placeholder') );
					}
				});
			}		
		});
		
		/* Custom javascript End */
	});
	
	/* ==============================================
	Contact Form
	=============================================== */

	$(document).ready(function () {
		
		'use strict';
		
		jQuery("#contact_form").validate({
			meta: "validate",
			submitHandler: function (form) {
				
				var s_name=$("#name").val();
				var s_lastname=$("#lastname").val();
				var s_email=$("#email").val();
				var s_phone=$("#phone").val();
				var s_comment=$("#comment").val();
				$.post("contact.php",{name:s_name,lastname:s_lastname,email:s_email,phone:s_phone,comment:s_comment},
				function(result){
				  $('#sucessmessage').append(result);
				});
				$('#contact_form').hide();
				return false;
			},
			/* */
			rules: {
				name: "required",
				
				lastname: "required",
				// simple rule, converted to {required:true}
				email: { // compound rule
					required: true,
					email: true
				},
				phone: {
					required: true,
				},
				comment: {
					required: true
				}
			},
			messages: {
				name: "Please enter your name.",
				lastname: "Please enter your last name.",
				email: {
					required: "Please enter email.",
					email: "Please enter valid email"
				},
				phone: "Please enter a phone.",
				comment: "Please enter a comment."
			},
		}); /*========================================*/
	});
	
	
	/* ==============================================
	Google Map
	=============================================== */
	$(document).ready(function () {
		
		'use strict';
		
			$('#gmap').gMap();
		
			$("#map-contact").gMap({
			markers: [{
				address: "",
				html: '<h4>Office</h4>' +
					'<address>' +
					'<div>' +
					'<div><b>Address:</b></div>' +
					'<div>Envato Pty Ltd, 13/2<br> Elizabeth St Melbourne VIC 3000,<br> Australia</div>' +
					'</div>' +
					'<div>' +
					'<div><b>Phone:</b></div>' +
					'<div>+1 (408) 786 - 5117</div>' +
					'</div>' +
					'<div>' +
					'<div><b>Fax:</b></div>' +
					'<div>+1 (408) 786 - 5227</div>' +
					'</div>' +
					'<div>' +
					'<div><b>Email:</b></div>' +
					'<div><a href="mailto:info@mannatstudio.com">info@mannatstudio.com</a></div>' +
					'</div>' +
					'</address>',
				latitude: -33.87695388579145,
				longitude: 151.22183918952942,
				icon: {
					image: "images/pin.png",
					iconsize: [35, 48],
					iconanchor: [17, 48]
				}
			}, ],
			icon: {
				image: "images/pin.png",
				iconsize: [35, 48],
				iconanchor: [17, 48]
			},
			latitude: -33.87695388579145,
			longitude: 151.22183918952942,
			zoom: 19,
		});
	});
	/* ==============================================
	Animated Items
	=============================================== */	
	jQuery(document).ready(function($) {
	
		'use strict';
		
		$('.animated').appear();
	
			$('.animated').on('appear', function() {
				var elem = $(this);
				var animation = elem.data('animation');
				if ( !elem.hasClass('visible') ) {
					var animationDelay = elem.data('animation-delay');
					if ( animationDelay ) {
	
						setTimeout(function(){
							elem.addClass( animation + " visible" );
						}, animationDelay);
	
					} else {
						elem.addClass( animation + " visible" );
					}
				}
			});
	});	
	
$(document).ready(function () {
    $(".switch-button").click(function () {
        if ($(this).is(".open")) {
            $(this).addClass("closed");
            $(this).removeClass("open");
            $(".styleswitcher").animate({
                "left": "-202px"
            })
        } else {
            $(this).addClass("open");
            $(this).removeClass("closed");
            $(".styleswitcher").animate({
                "left": "0px"
            })
        }
    })
});
$(document).ready(function () {
	if($.cookie("css")) {
		$("link.alt").attr("href",$.cookie("css"));
	}
	$(".color-scheme a").click(function () {
		$("link.alt").attr("href", $(this).attr("rel"));
		$.cookie("css",$(this).attr('rel'), {expires: 365, path: '/'});
		return false
	});
});
