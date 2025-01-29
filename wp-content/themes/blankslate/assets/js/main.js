/*========================================
---------- [JS_INDEXING_START] -----------
==========================================
## [_Prealoder_Default]
## [_Header_Height]
## [_Sticky_Header]
## [_Side_Panel_Start]
## [_Mobile_Menu_Start]
## [_Progress_Bar]
## [_Toggle_Search_Box]
## [_Back_To_Top]
## [_Accordion]
## [_Owl_Carousel]
	## [_home_carousel]
	## [_testimonial_items_1col]
	## [_Testimonial_Items_2col]
	## [_Testimonial_Items_3col]
	## [_Team_Items_5col]
	## [_Team_Items_3col]
	## [_Project_Items_5col]
	## [_Client_Items]
## [_Language_Button]
## [_Inline_Data_Attribute]
## [_MagnificPopUp]
## [_Portfolio_Filter]
## [_CounterUp]
## [_Wow]
==========================================
--------- [JS_INDEXING_END] --------------
==========================================
*/

(function ($) {
	"use strict";

	var wind = $(window);
	var jQwind = jQuery(window);
	var jQdoc = jQuery(document);

	// ===Prealoder===
	function prealoader() {
		if ($('.preloader').length) {
			$('.preloader').delay(100).fadeOut(500);
		}
	}

	/*=============================================*/
	/*------------- [_Header_Height] --------------*/
	/*=============================================*/
	var headerHeight = $('.header-style-two').height();
	$('.header-style-two').css('height', 80);

	/*=============================================*/
	/*-------------- [_Sticky_Header] -------------*/
	/*=============================================*/
	wind.on('scroll', function () {
		var sticky_header_navbar = $('.header__navbar');

		var scroll = wind.scrollTop();

		if (scroll < 36) {
			sticky_header_navbar.removeClass('fixed');
		} else {
			sticky_header_navbar.addClass('fixed');
		}

	});


	jQuery(document).on('ready', function () {

		/*=============================================*/
		/*----------- [_Side_Panel_Start] -------------*/
		/*=============================================*/
		$('.side-panel-trigger').on('click', function () {
			$('.side-panel-content').addClass('side-panel-open');
		})

		$('.close-icon').on('click', function () {
			$('.side-panel-content').removeClass('side-panel-open');
		})

		/*=============================================*/
		/*------------- [_Progress_Bar] ---------------*/
		/*=============================================*/
		if ($('.progress-line').length) {
			$('.progress-line').appear(function () {
				var el = $(this);
				var percent = el.data('width');
				$(el).css('width', percent + '%');
			}, {
				accY: 0
			});
		}
		if ($('.count-box').length) {
			$('.count-box').appear(function () {
				var $t = $(this),
					n = $t.find(".count-text").attr("data-stop"),
					r = parseInt($t.find(".count-text").attr("data-speed"), 10);
				if (!$t.hasClass("counted")) {
					$t.addClass("counted");
					$({
						countNum: $t.find(".count-text").text()
					}).animate({
						countNum: n
					}, {
						duration: r,
						easing: "linear",
						step: function () {
							$t.find(".count-text").text(Math.floor(this.countNum));
						},
						complete: function () {
							$t.find(".count-text").text(this.countNum);
						}
					});
				}
			}, {
				accY: 0
			});
		}
		/*=============================================*/
		/*----------- [_Toggle_Search_Box] ------------*/
		/*=============================================*/
		var $showsearchbox = $(".show-searchbox");
		var $togglesearchbox = $(".toggle-searchbox");
		$(document).on('click', function (e) {
			var clickID = e.target.id;
			if ((clickID !== 's')) {
				$togglesearchbox.removeClass('show');
			}
		});
		$showsearchbox.on('click', function (e) {
			event.stopPropagation();
		});
		$('.search-form').on('click', function (e) {
			event.stopPropagation();
		});
		$showsearchbox.on('click', function (e) {
			if (!$togglesearchbox.hasClass("show")) {
				$togglesearchbox.addClass('show');
				event.preventDefault();
			} else
				$togglesearchbox.removeClass('show');
			event.preventDefault();

			if (!$showsearchbox.hasClass("active"))
				$showsearchbox.addClass('active');
			else
				$showsearchbox.removeClass('active');
		});

		/*=============================================*/
		/*--------------- [_Back_To_Top] --------------*/
		/*=============================================*/
		$.scrollUp({
			scrollName: 'scrollUp', // Element ID
			topDistance: '300', // Distance from top before showing element (px)
			topSpeed: 300, // Speed back to top (ms)
			animation: 'fade', // Fade, slide, none
			animationInSpeed: 200, // Animation in speed (ms)
			animationOutSpeed: 200, // Animation out speed (ms)
			scrollText: '<i class="fa fa-angle-up"></i>', // Text for element
			activeOverlay: false, // Set CSS color to display scrollUp active point, e.g '#00FFFF'
		});

		/*=============================================*/
		/*--------------- [_Accordion] ----------------*/
		/*=============================================*/
		$('.accordion').find('.accordion-header').on('click', function () {
			// Adds Active Class
			$(this).toggleClass('active');
			// Expand or Collapse This Panel
			$(this).next().slideToggle(300, "swing");
			// Hide The Other Panels
			$('.accordion-body').not($(this).next()).slideUp(300, "swing");
			// Removes Active Class From Other Titles
			$('.accordion-header').not($(this)).removeClass('active');
		});

		/*=============================================*/
		/*------------- [_Owl_Carousel] ---------------*/
		/*=============================================*/

		/*------------- [_home_carousel] --------------*/
		function home_carousel() {
			var owl = $(".home-carousel");
			owl.owlCarousel({
				loop: true,
				margin: 0,
				nav: true,
				dots: false,
				animateOut: 'fadeOut',
				animateIn: 'fadeIn',
				active: true,
				autoplay: false,
				smartSpeed: 1000,
				autoplayTimeout: 8000,
				navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
				responsive: {
					0: {
						items: 1
					},
					425: {
						items: 1
					},
					768: {
						items: 1
					},
					1024: {
						items: 1
					},
					1440: {
						items: 1
					}
				}
			});
		}
		home_carousel();

		/*------------- [_testimonial_items_1col] ------*/
		function testimonial_items_1col() {
			var owl = $(".testimonial-items-1col");
			owl.owlCarousel({
				loop: true,
				margin: 30,
				autoplay: true,
				autoplayTimeout: 8000,
				nav: true,
				dots: true,
				navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
				responsive: {
					0: {
						items: 1
					},
					425: {
						items: 1
					},
					768: {
						items: 1
					},
					1024: {
						items: 2
					},
					1440: {
						items: 1
					}
				}
			});
		}
		testimonial_items_1col();

		/*------------- [_Testimonial_Items_2col] ------*/
		function testimonial_items_2col() {
			var owl = $(".testimonial-items-2col");
			owl.owlCarousel({
				loop: true,
				margin: 30,
				autoplay: false,
				autoplayTimeout: 8000,
				nav: true,
				dots: false,
				navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
				responsive: {
					0: {
						items: 1
					},
					425: {
						items: 1
					},
					768: {
						items: 1
					},
					1024: {
						items: 2
					},
					1440: {
						items: 2
					}
				}
			});
		}
		testimonial_items_2col();

		/*------------- [_Testimonial_Items_3col] ------*/
		function testimonial_items_3col() {
			var owl = $(".testimonial-items-3col");
			owl.owlCarousel({
				loop: true,
				margin: 30,
				autoplay: false,
				autoplayTimeout: 8000,
				nav: true,
				dots: false,
				navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
				responsive: {
					0: {
						items: 1
					},
					425: {
						items: 1
					},
					768: {
						items: 2
					},
					1024: {
						items: 2
					},
					1440: {
						items: 3
					}
				}
			});
		}
		testimonial_items_3col();

		/*------------- [_Team_Items_3col] ------*/
		function team_items_3col() {
			var owl = $(".team-items-3col");
			owl.owlCarousel({
				loop: true,
				margin: 30,
				autoplay: true,
				autoplayTimeout: 8000,
				nav: true,
				dots: false,
				navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
				responsive: {
					0: {
						items: 1
					},
					425: {
						items: 1
					},
					768: {
						items: 2
					},
					1024: {
						items: 3
					},
					1440: {
						items: 3
					}
				}
			});
		}
		team_items_3col();

		/*------------- [_Team_Items_5col] ------*/
		function team_items_5col() {
			var owl = $(".team-items-5col");
			owl.owlCarousel({
				loop: true,
				margin: 30,
				autoplay: true,
				autoplayTimeout: 8000,
				nav: true,
				dots: false,
				navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
				responsive: {
					0: {
						items: 1
					},
					425: {
						items: 2
					},
					768: {
						items: 3
					},
					1024: {
						items: 4
					},
					1440: {
						items: 5
					}
				}
			});
		}
		team_items_5col();

		/*------------- [_Project_Items_5col] ------*/
		function project_items_4col() {
			var owl = $(".project-items-4col");
			owl.owlCarousel({
				loop: true,
				margin: 5,
				autoplay: false,
				autoplayTimeout: 8000,
				nav: true,
				dots: false,
				navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
				responsive: {
					0: {
						items: 1
					},
					425: {
						items: 1
					},
					768: {
						items: 2
					},
					1024: {
						items: 3
					},
					1440: {
						items: 4
					}
				}
			});
		}
		project_items_4col();

		/*------------- [_Client_Items] ------*/
		function client_items() {
			var owl = $(".client-items");
			owl.owlCarousel({
				loop: true,
				margin: 30,
				autoplay: true,
				autoplayTimeout: 8000,
				nav: false,
				dots: false,
				navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
				responsive: {
					0: {
						items: 1
					},
					425: {
						items: 2
					},
					768: {
						items: 3
					},
					1024: {
						items: 4
					},
					1440: {
						items: 5
					}
				}
			});
		}
		client_items();

		/*=============================================*/
		/*------------ [_Language_Button] -------------*/
		/*=============================================*/
		$('.language-btn').on('click', function (event) {
			event.preventDefault();
			$(this).next('.language-dropdown').toggleClass('open');
		});

		/*=============================================*/
		/*---------- [_Inline_Data_Attribute] ---------*/
		/*=============================================*/
		var sectionBgImg = $(".bg-img, .footer, section, div");
		sectionBgImg.each(function (indx) {
			if ($(this).attr("data-background")) {
				$(this).css("background-image", "url(" + $(this).data("background") + ")");
			}
		});

		/*=============================================*/
		/*--------------- [_MagnificPopUp] ------------*/
		/*=============================================*/
		$('.popup-load').magnificPopup({
			type: 'iframe',
			gallery: {
				enabled: true
			}
		});
		$('.img-popup').magnificPopup({
			type: 'image',
			gallery: {
				enabled: true
			}
		});
		$('.popup-youtube, .popup-youtube-left, .popup-vimeo, .popup-gmaps').magnificPopup({
			type: 'iframe',
			mainClass: 'mfp-fade',
			removalDelay: 160,
			preloader: false,
			fixedContentPos: false
		});

		/*=============================================*/
		/*------------ [_Portfolio_Filter] ------------*/
		/*=============================================*/
		$("#container").imagesLoaded(function () {
			$(".project-filter").on("click", "li", function () {
				$('li').removeClass("active");
				$(this).addClass("active");
				var filterValue = $(this).attr("data-filter");
				$grid.isotope({
					filter: filterValue
				});
			});
			var $grid = $(".grid").isotope({
				itemSelector: ".grid-item",
				percentPosition: true,
				transitionDuration: ".6s"
			})
		});

		/*=============================================*/
		/*--------------- [_CounterUp] ----------------*/
		/*=============================================*/
		$('.counter').counterUp({
			delay: 10,
			time: 1000
		});

		/*=============================================*/
		/*------------------ [_Wow] -------------------*/
		/*=============================================*/
		if ($('.wow').length) {
			var wow = new WOW({
				boxClass: 'wow',
				animateClass: 'animated',
				offset: 0,
				mobile: false,
				live: true
			});
			wow.init();
		}

	});

	// Window Load event
	jQuery(window).on('load', function () {
		(function ($) {
			prealoader();
		})(jQuery);
	});

}(jQuery));


/*=============================================*/
/*------------------ [Price calculator] -------*/
/*=============================================*/
$(document).ready(function () {

	$('#page-count .slider').radiosToSlider({
		animation: true,
		fitContainer: true,
	});

	$('#design-level .slider').radiosToSlider({
		animation: true,
		fitContainer: true,
	});

	$('#responsive-design .slider').radiosToSlider({
		isDisable: true,
	});

	$('#cms .slider').radiosToSlider({
		animation: true,
		fitContainer: true,
	});

	$('#lang .slider').radiosToSlider({
		animation: true,
		fitContainer: true,
	});

	$('#ecommerce .slider').radiosToSlider({
		animation: true,
		fitContainer: true,
	});

	$('#copy .slider').radiosToSlider({
		animation: true,
		fitContainer: true,
	});

	$('#seo .slider').radiosToSlider({
		animation: true,
		fitContainer: true,
	});

	$('#btn-recalculate').on('click', function (event) {
		event.preventDefault();

		// main code
		$('#price-calculator-section-on .price-calculator').show();
		$('#price-calculator-section-on .price-calculator-result').hide();
		window.location.href = "#price-calculator-section-on";
	});
});


function calculate_price(result_msg, web_discount, web_discount_deadline) {
	// main code
	$('#price-calculator-section-on .price-calculator').hide();
	$('#price-calculator-section-on .price-calculator-result').show();


	//////////////////////////////////
	var web_price = 0;
	var seo_price = 0;
	var quote_details = '';

	//
	web_price += get_option_price([1237272, 1787171, 2096488], 'page-count');
	quote_details += get_option_quote_detail('page-count');

	//
	web_price += get_option_price([2845725, 4454179, 6928723], 'design-level');
	quote_details += get_option_quote_detail('design-level');

	//
	web_price += get_option_price([0, 2474544, 7423631], 'cms');
	quote_details += get_option_quote_detail('cms');

	//
	web_price += get_option_price([0, 1058555, 1651346], 'lang');
	quote_details += get_option_quote_detail('lang');

	//
	web_price += get_option_price([0, 2532500, 4220833], 'ecommerce');
	quote_details += get_option_quote_detail('ecommerce');

	//
	seo_price = get_option_price([0, 3609000, 4599000], 'seo');
	quote_details += get_option_quote_detail('seo');
	//
	if (seo_price == 0) {
		web_price += get_option_price([0, 268000, 670000], 'copy');
		quote_details += get_option_quote_detail('copy');
	}


	//////////////////////////////
	process_quote_result(result_msg, web_discount, web_discount_deadline, web_price, seo_price);

	//////////////////////////////
	generate_quote_dateails_for_textarea(quote_details);

	///////////////////// scroll top section top
	window.location.href = "#price-calculator-section-on";
}

function get_option_price(prices, element_id) {
	return prices[get_chosen_option_index(element_id)];
}

function get_option_quote_detail(element_id) {
	var label = $("#" + element_id + " h4").text();
	var i = get_chosen_option_index(element_id);
	var chosen_option = $("#" + element_id + " .slider label").eq(i).text();

	return label + ': ' + chosen_option + '\n';
}

function get_chosen_option_index(element_id) {
	return parseInt($("input[type=radio][name=" + element_id + "]:checked").val());
}

function process_quote_result(result_msg, web_discount, web_discount_deadline, web_price, seo_price) {
	var double_discount = 0.9;
	var total_pre_discount_price = web_price;

	if (web_discount > 0) {
		if (web_discount_deadline < get_today())
			web_discount = 0;
		else {
			web_discount_deadline = convert_date_to_display_format(web_discount_deadline);
			// discount massage may contain placeholders
			result_msg[2] = result_msg[2].replace("%deadline%", web_discount_deadline);
			result_msg[2] = result_msg[2].replace("%discount%", web_discount + '%');

			web_discount = (100 - web_discount) / 100;
		}
	}

	// no discount
	if (seo_price <= 0 && web_discount <= 0) {
		render_quote_result(result_msg[0], web_price, seo_price);
	}

	// let us give 10% discount for web, if both web and seo are purchased.
	else if (seo_price > 0 && web_discount == 0) {
		msg = result_msg[0].concat(result_msg[3], result_msg[4]);
		render_quote_result(msg, web_price * double_discount, total_pre_discount_price, seo_price);
	}

	// 
	else if (seo_price == 0 && web_discount > 0) {
		msg = result_msg[0].concat(result_msg[3]);
		render_quote_result(msg, web_price * web_discount, total_pre_discount_price, seo_price);
	}

	// (seo_price > 0 && web_discount > 0) -> wow, two possible discounts, let's choose which is best for client
	else {
		web_discount = web_price * web_discount + seo_price;
		double_discount = web_price * double_discount + seo_price;

		// web discount wins
		if (web_discount < double_discount) {
			msg = result_msg[0].concat(result_msg[3]);
			render_quote_result(msg, web_discount, total_pre_discount_price, seo_price);
		}
		// double discount wins
		else {
			msg = result_msg[0].concat(' ', result_msg[1], ' ', result_msg[3]);
			render_quote_result(msg, double_discount, total_pre_discount_price, seo_price);
		}
	}

	msg = $('#price-calculator-result-msg').html().concat(' ', result_msg[4]);
	$('#price-calculator-result-msg').html(msg);
}

function generate_quote_dateails_for_textarea(quote_details) {
	$('#quote-details').val(quote_details);
	msg = $('#price-calculator-result-msg').text();
	$("input[type=hidden][name=price-calculator-result-msg]").val(msg);

}

function render_quote_result(msg, final_price, pre_discount_price = 0, seo_price) {
	$('#price-calculator-result-msg').html(msg);

	final_price = format_money(final_price, 0, '', ',');
	seo_price = format_money(seo_price, 0, '', ',');
	if (pre_discount_price > 0) {
		pre_discount_price = format_money(pre_discount_price, 0, '', ',');
		$('#price-calculator-result-msg #pre-discount-price').text(pre_discount_price);
		$('#price-calculator-result-msg #final-price').text(final_price);
		$('#price-calculator-result-msg #seo-price').text(seo_price);
		$('#price-calculator-result-msg #final-price').addClass('on');
	} else {
		$('#price-calculator-result-msg #pre-discount-price').text(final_price);
		$('#price-calculator-result-msg #seo-price').text(seo_price);
	}
}

function format_money(amount, decimalCount = 2, decimal = ".", thousands = ",") {
	try {
		decimalCount = Math.abs(decimalCount);
		decimalCount = isNaN(decimalCount) ? 2 : decimalCount;

		const negativeSign = amount < 0 ? "-" : "";

		let i = parseInt(amount = Math.abs(Number(amount) || 0).toFixed(decimalCount)).toString();
		let j = (i.length > 3) ? i.length % 3 : 0;

		return negativeSign + (j ? i.substr(0, j) + thousands : '') + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + thousands) + (decimalCount ? decimal + Math.abs(amount - i).toFixed(decimalCount).slice(2) : "");
	} catch (e) {
		console.log(e);
	}
}

function get_today() {
	var today = new Date();
	var dd = String(today.getDate()).padStart(2, '0');
	var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
	var yyyy = today.getFullYear();

	return yyyy + '.' + mm + '.' + dd;
}

function convert_date_to_display_format(d) {
	d = d.split('.');
	return d[2] + '.' + d[1] + '.' + d[0];
}


$(function () { //on DOM ready 
	$(".customer-logos-img-box").simplyScroll({
		frameRate: 30,
		pauseOnHover: false,
		pauseOnTouch: false,
	});
});

