$(function() {

	// Main Slider
	$('#main_slider').slick({
		infinite: true,
		autoplay: true,
		autoplaySpeed: 5000,
		speed: 1000,
		dots: true,
		// fade: true,
		pauseOnHover: false,
		arrows: false,
		responsive: [
		{
			breakpoint: 640,
			settings: {
	    		unslick: true,
				dots: false,
				autoplay: true
	  		}
    	}
	]
	});

	// Services Slider
	$('#services_slider').slick({
		slidesToShow: 3,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 5000,
		arrows: false,
		dots: false,
		responsive: [

		{
			breakpoint: 768,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 1
			}
		},
		{
			breakpoint: 640,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1
			}
		}
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
    ]
	});
	$('.slider_btn_prev').click(function(){
		$("#services_slider").slick('slickPrev');
	});
	$('.slider_btn_next').click(function(){
		$("#services_slider").slick('slickNext');
	});


	// Parallax
	$('.parallax-window').parallax({imageSrc: 'img/parallax.jpg'});

	// Mobile | Tablet Menu
	$('.mobile_main_menu_btn').on('click', function() {
		$('.mobile_main_menu').stop(true, true).slideToggle();
	});

	// Button Up
	$(window).scroll(function(){
		if($(this).scrollTop() > 800) {
			$('#button-up').fadeIn();
		}
		else {
			$('#button-up').fadeOut();
		}
	});
	$('#button-up').click(function () {
		$('html, body').animate( {scrollTop: 0 }, 600 );
		return false;
	});

	// Accordeon
	$('.accordeon_trigger').on('click', function(e) {
		e.preventDefault();
		var $this = $(this),
			item = $this.closest('.accordeon_item'),
			list = $this.closest('.accordeon_list'),
			items = list.find('.accordeon_item'),
			content = item.find('.accordeon_inner_list'),
			otherContent = list.find('.accordeon_inner_list'),
			duration = 300;

			if(!item.hasClass('active')) {

				items.removeClass('active');
				item.addClass('active');
				otherContent.stop(true, true).slideUp(duration);
				content.stop(true, true).slideDown(duration);
			} else {
				content.stop(true, true).slideUp(duration);
				item.removeClass('active');
			}
	});
	// Gallery navigation
	 $('.gallery_nav_list .gallery_item_link').click(function () {
        $('.gallery_nav_list .gallery_item_link').removeClass('active');
        $(this).addClass('active');
    });

	// Headhesive

    // Initialise with options
    var top_main_menu = new Headhesive('.page_header', options);
    // Set options
    var options = {
    	offset: 500
    };

	// Headhesive destroy
	if ($(window).width() <= '1024'){
		top_main_menu.destroy();
	};

	// Select 2
	$('.select-form__select').select2();

	// Mach Height
	$('.slide_inner').matchHeight(options);
	$('.review_item').matchHeight(options);
	$('.doctor_content_wrap').matchHeight(options);




});
